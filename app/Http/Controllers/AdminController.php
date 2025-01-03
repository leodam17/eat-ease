<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;

class AdminController extends Controller
{


    public function dashboard(){

        $orders = Order::paginate(10);
        return view('admin.dashboard', compact('orders'));

    }

    public function lowDemandMenus()
    {
        $menus = Menu::all(); // Ambil semua menu dari database
        $leastOrderedMenu = $this->swarmOptimization($menus); // Panggil metode swarmOptimization untuk mendapatkan menu dengan pemesanan paling rendah
        
        // Cek apakah $leastOrderedMenu adalah objek yang valid
        if ($leastOrderedMenu === null) {
            return view('admin.adminleastmenu', ['error' => 'Tidak ada menu dengan pemesanan terendah.']);
        }
    
        return view('admin.adminleastmenu', compact('leastOrderedMenu')); // Kirim $leastOrderedMenu ke view
    }
    
    

    private function swarmOptimization($menus, $iterations = 50)
    {
        $particles = [];
        $globalBest = null;
        $globalBestValue = PHP_INT_MAX;
    
        // Inisialisasi partikel
        foreach ($menus as $menu) {
            $particle = [
                'menu' => $menu,
                'velocity' => mt_rand() / mt_getrandmax() * 2 - 1, // Float antara -1 dan 1
                'best_position' => $menu->total_pemesanan,
                'best_value' => $menu->total_pemesanan,
            ];
            $particles[] = $particle;
    
            // Cari global best awal
            if ($menu->total_pemesanan < $globalBestValue) {
                $globalBest = $menu;
                $globalBestValue = $menu->total_pemesanan;
            }
        }
    
        // Jika tidak ada menu dengan pemesanan, kembalikan null
        if ($globalBest === null) {
            return null; // Atau bisa mengembalikan $menus[0] jika perlu fallback
        }
    
        // Iterasi
        for ($i = 0; $i < $iterations; $i++) {
            foreach ($particles as &$particle) {
                // Hitung fitness
                $fitness = $particle['menu']->total_pemesanan;
    
                // Update best position
                if ($fitness < $particle['best_value']) {
                    $particle['best_position'] = $fitness;
                    $particle['best_value'] = $fitness;
                }
    
                // Update global best
                if ($fitness < $globalBestValue) {
                    $globalBest = $particle['menu'];
                    $globalBestValue = $fitness;
                }
    
                // Update velocity dan posisi
                $w = 0.5; // Bobot inersia
                $c1 = 1.5; // Faktor kognitif
                $c2 = 1.5; // Faktor sosial
                $r1 = mt_rand() / mt_getrandmax();
                $r2 = mt_rand() / mt_getrandmax();
    
                $particle['velocity'] = ($w * $particle['velocity']) +
                    ($c1 * $r1 * ($particle['best_position'] - $fitness)) +
                    ($c2 * $r2 * ($globalBestValue - $fitness));
    
                $currentPosition = $particle['menu']->total_pemesanan + $particle['velocity'];
            }
        }
    
        return $globalBest; // Menu dengan pemesanan paling rendah
    }
    
}
