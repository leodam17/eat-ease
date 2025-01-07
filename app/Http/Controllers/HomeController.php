<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Mengecek apakah user sudah login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        $loggedInUser = Auth::user();
    
        // Digunakan untuk carousel
        $menus = Menu::orderBy('popularitas', 'desc')->get();
    
        $menu_data = Menu::all();
    
        // Kategori ditandai dengan angka
        $kategori_map = [];
        foreach ($menu_data as $menu) {
            if (!isset($kategori_map[$menu->kategori])) {
                $kategori_map[$menu->kategori] = count($kategori_map);
            }
            $menu->kategori_encoded = $kategori_map[$menu->kategori];
        }
    
        // Alergi
        $allergy_categories = [
            'seafood' => ['shrimp', 'crab', 'lobster', 'oysters', 'fish', 'squid', 'seafood'],
            'peanut' => ['peanut', 'almond'],
            'chicken' => ['chicken'],
            'hazelnut' => ['hazelnut', 'nut'],
            'milk' => ['milk', 'cheese', 'cream', 'milkshake'],
            'tofu' => ['tofu'],
        ];
    
        // Mengambil preferensi dan alergi user
        $user_preference = $loggedInUser->preferensi;
        $user_allergy = strtolower($loggedInUser->alergi);
    
        $compatible_menus = collect($menu_data)->filter(function ($menu) use ($user_preference) {
            // Vegan
            if ($user_preference === 'vegan') {
                if ($menu->kategori !== 'Vegan' && stripos($menu->nama, 'vegan') === false && stripos($menu->deskripsi, 'vegan') === false) {
                    return false;
                }
            }
    
            // Normal
            if ($user_preference === 'normal') {
                if ($menu->kategori !== 'Normal') {
                    return false;
                }
            }
    
            // Dessert
            if ($user_preference === 'dessert') {
                if ($menu->kategori !== 'Dessert' && stripos($menu->nama, 'dessert') === false && stripos($menu->deskripsi, 'dessert') === false) {
                    return false;
                }
            }

            // Spicy
            if ($user_preference === 'spicy') {
                if (stripos($menu->nama, 'spicy') === false && stripos($menu->kategori, 'spicy') === false && stripos($menu->deskripsi, 'spicy') === false) {
                    return false;
                }
            }
    
            return true;
        });
    
        // Menyaring menu berdasarkan alergi user
        if (isset($allergy_categories[$user_allergy]) && $user_allergy !== 'none') {
            $allergic_ingredients = $allergy_categories[$user_allergy];
            $compatible_menus = $compatible_menus->filter(function ($menu) use ($allergic_ingredients) {
                foreach ($allergic_ingredients as $ingredient) {
                    if (stripos($menu->nama, $ingredient) !== false || stripos($menu->deskripsi, $ingredient) !== false) {
                        return false;
                    }
                }
                return true;
            });
        }
    
        $user_orders = Order::where('user_id', $loggedInUser->id)->get();
    
        $user_order_names = $user_orders->pluck('nama_pesanan')->toArray();
    
        // KNN
        $distances = [];
        foreach ($compatible_menus as $menu) {
            $current_menu = [
                'menu_name' => $menu->nama,
                'kategori_encoded' => $menu->kategori_encoded,
                'harga' => (float)$menu->harga,
                'kalori' => (float)$menu->kalori,
                'waktu_pengerjaan' => (float)$menu->waktu_pengerjaan,
            ];
    
            $distance = 0;
            foreach ($user_order_names as $ordered_item) {
                $ordered_menu = Menu::where('nama', $ordered_item)->first();
    
                if ($ordered_menu) {
                    // Menggunakan Euclidean Distance
                    $distance += pow($current_menu['harga'] - $ordered_menu->harga, 2)
                               + pow($current_menu['kalori'] - $ordered_menu->kalori, 2)
                               + pow($current_menu['waktu_pengerjaan'] - $ordered_menu->waktu_pengerjaan, 2);
                }
            }
    
            $distances[] = ['menu' => $menu, 'distance' => sqrt($distance)];
        }
    
        // Mengurutkan menu berdasarkan jarak
        usort($distances, function ($a, $b) {
            return $a['distance'] <=> $b['distance'];
        });
    
        // Mengambil 6 menu terdekat
        $recommendations = collect($distances)->take(6)->pluck('menu');
    
        return view('user.home', [
            'menus' => $menus,
            'recommendations' => $recommendations,
            'user' => $loggedInUser->nama,
        ]);
    }
    
    public function about()
    {
        return view('user.about');
    }

    public function menu()
    {
        return view('user.menu');
    }
}
