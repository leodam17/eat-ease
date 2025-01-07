<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Order;

class CartController extends Controller
{
    // Menampilkan halaman cart
    public function index()
    {
        // Mengambil data cart yang berada di session
        $cart = session()->get('cart', []);
        $menuIds = array_keys($cart);

        // Query menu berdasarkan ID yang ada di cart
        $menus = Menu::whereIn('id', $menuIds)->get();

        $orderTotal = 0; // Untuk menghitung total harga

        // Menggabungkan data menu dengan quantity dari session
        $menuDetails = $menus->map(function ($menu) use ($cart, &$orderTotal) {
            $quantity = $cart[$menu->id]['quantity'];
            $price = $menu->harga;
            $totalPrice = $price * $quantity; // Harga total item

            $orderTotal += $totalPrice;

            return [
                'id' => $menu->id,
                'name' => $menu->nama,
                'image' => $menu->gambar,
                'category' => $menu->kategori,
                'price' => $price,
                'quantity' => $quantity,
                'totalPrice' => $totalPrice,
            ];
        });

        return view('user.cart', compact('menuDetails', 'orderTotal'));
    }

    // Menambahkan item ke cart
    public function add(Request $request)
    {
        // Mengambil data
        $menuId = $request->input('menu_id');
        $quantity = max((int) $request->input('quantity'), 1);

        $cart = session()->get('cart', []);

        // Mengupdate quantity
        if (isset($cart[$menuId])) {
            $cart[$menuId]['quantity'] += $quantity;
        } else {
            $cart[$menuId] = ['quantity' => $quantity];
        }

        session()->put('cart', $cart);

        return redirect()->route('user.cart');
    }

    // Mengupdate quantity item di dalam cart
    public function updateQuantity(Request $request, $menuId)
    {
        $action = $request->input('action'); // "increase" atau "decrease"
        $cart = session()->get('cart', []);
    
        if (isset($cart[$menuId])) {
            if ($action === 'increase') {
                $cart[$menuId]['quantity'] += 1;
            } elseif ($action === 'decrease') {
                $cart[$menuId]['quantity'] = max(1, $cart[$menuId]['quantity'] - 1);
            }
        }
    
        session()->put('cart', $cart);
    
        // Menghitung ulang total harga
        $menu = Menu::find($menuId);
        $itemTotalPrice = $cart[$menuId]['quantity'] * $menu->harga;
        $orderTotal = $this->calculateOrderTotal($cart);
    
        return response()->json([
            'quantity' => $cart[$menuId]['quantity'],
            'itemTotalPrice' => $itemTotalPrice,
            'orderTotal' => $orderTotal
        ]);
    }
    
    // Delete item
    public function remove($menuId)
    {
        $cart = session()->get('cart', []);
    
        if (isset($cart[$menuId])) {
            unset($cart[$menuId]);
        }
    
        session()->put('cart', $cart);
    
        // Menghitung ulang total harga
        $orderTotal = $this->calculateOrderTotal($cart);
    
        return response()->json(['orderTotal' => $orderTotal]);
    }
    
    // Menghitung total order
    private function calculateOrderTotal($cart)
    {
        $menuIds = array_keys($cart);
        $menus = Menu::whereIn('id', $menuIds)->get();
    
        $orderTotal = $menus->reduce(function ($total, $menu) use ($cart) {
            return $total + ($menu->harga * $cart[$menu->id]['quantity']);
        }, 0);
    
        return $orderTotal;
    }

    // Menyimpan order ke tabel order
    public function storeOrder(Request $request)
    {
        $cart = session()->get('cart', []);
        
        $menuIds = array_keys($cart);
        $menus = Menu::whereIn('id', $menuIds)->get();
    
        // Loop semua item di dalam cart
        foreach ($menus as $menu) {
            // Mengambil quantity
            $quantity = $cart[$menu->id]['quantity'];
    
            for ($i = 0; $i < $quantity; $i++) {
                Order::create([
                    'user_id' => auth()->id(),
                    'nama_pesanan' => $menu->nama,
                    'status_pesanan' => 0, // Default status = 0
                ]);
            }
        }
    
        // Clear cart setelah data sudah tersimpan
        session()->forget('cart');
    
        return redirect('/home')->with('success', 'Thank you for your payment!');
    }
}
