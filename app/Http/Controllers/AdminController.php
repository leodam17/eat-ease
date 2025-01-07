<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function dashboard() {
        $totalOrder = DB::table('order')->count();
        $totalMenu = DB::table('menu')->count(); 
        $loggedInAdmin = Auth::user(); // Dapatkan data admin yang login

        // Jika user tidak ditemukan, beri respons error
        if (!$loggedInAdmin) {
            return response()->json(['error' => 'Admin not found'], 404);
        }

        $orders = Order::paginate(7); 

        return view('admin.dashboard', compact('orders', 'totalOrder', 'totalMenu'), [
            'admin' => $loggedInAdmin->nama,
            'email' => $loggedInAdmin->email,
        ]);
    }
    

    public function lowDemandMenus()
    {
        $menus = Menu::all();
    
        // Gunakan Simulated Annealing untuk menemukan menu dengan total pemesanan terendah
        $leastOrderedMenu = $this->simulatedAnnealing($menus);
        $loggedInAdmin = Auth::user(); // Dapatkan data admin yang login

        // Jika user tidak ditemukan, beri respons error
        if (!$loggedInAdmin) {
            return response()->json(['error' => 'Admin not found'], 404);
        }
    
        if ($leastOrderedMenu === null) {
            return view('admin.adminleastmenu', ['error' => 'Tidak ada menu dengan pemesanan terendah.',]);
        }
    
        return view('admin.adminleastmenu', compact('leastOrderedMenu'), [
            'admin' => $loggedInAdmin->nama,
            'email' => $loggedInAdmin->email,
        ]);
    }
    

    private function simulatedAnnealing($menus, $initialTemperature = 100, $coolingRate = 0.95, $iterations = 100)
    {
        $currentSolution = $menus->random(); // Ambil solusi awal secara acak
        $currentBest = $currentSolution; // jadikan solusi terbaik
        $currentBestValue = $currentSolution->total_pemesanan;
    
        $temperature = $initialTemperature; // inisialisasi temperature
    
        for ($i = 0; $i < $iterations; $i++) {
            // Pilih tetangga baru secara acak
            $newSolution = $menus->random();
            $newValue = $newSolution->total_pemesanan;
    
            // Jika solusi baru lebih baik, terima solusi baru
            if ($newValue < $currentBestValue) {
                $currentBest = $newSolution;
                $currentBestValue = $newValue;
            } else {
                // Jika solusi baru lebih buruk, terima berdasarkan probabilitas
                // Semakin tinggi temperatur, semakin besar peluang menerima menu yang lebih buruk
                $acceptanceProbability = exp(($currentBestValue - $newValue) / $temperature);
                if (rand() / getrandmax() < $acceptanceProbability) {
                    $currentSolution = $newSolution;
                }
            }
    
            // Turunkan temperatur, agar mengurangi kemungkinan menerima solusi yang lebih buruk
            $temperature *= $coolingRate;
        }
    
        return $currentBest; // Kembalikan solusi terbaik ( menu dengan total pemesanan terendah )
    }
    
    public function popularMenus()
    {
        $popularMenus = DB::table('order')
            ->select('nama_pesanan', DB::raw('count(*) as total_orders'))
            ->groupBy('nama_pesanan')
            ->orderBy('total_orders', 'desc')
            ->paginate(8); // memberikan paginasi 8 item per halaman
    
        $loggedInAdmin = Auth::user();
    
        if (!$loggedInAdmin) {
            return redirect()->route('login')->withErrors('Please log in.');
        }
    
        return view('admin.popularMenus', compact('popularMenus'), [
            'admin' => $loggedInAdmin->nama,
            'email' => $loggedInAdmin->email,
        ]);
    }     
}
