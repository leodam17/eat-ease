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
        // Ambil data cart dari session
        $cart = session()->get('cart', []);
        $menuIds = array_keys($cart);

        // Query menu berdasarkan ID yang ada di cart
        $menus = Menu::whereIn('id', $menuIds)->get();

        $orderTotal = 0; // Untuk menghitung total harga

        // Gabungkan data menu dengan quantity dari session
        $menuDetails = $menus->map(function ($menu) use ($cart, &$orderTotal) {
            $quantity = $cart[$menu->id]['quantity'];
            $price = $menu->harga; // Pastikan ini sesuai nama kolom di database
            $totalPrice = $price * $quantity; // Harga total item ini

            $orderTotal += $totalPrice; // Tambahkan ke orderTotal

            return [
                'id' => $menu->id,
                'name' => $menu->nama, // Sesuaikan nama kolom
                'image' => $menu->gambar, // Sesuaikan nama kolom
                'category' => $menu->kategori,
                'price' => $price,
                'quantity' => $quantity,
                'totalPrice' => $totalPrice, // Simpan harga total item ini
            ];
        });

        // Kirim total harga ke view
        return view('user.cart', compact('menuDetails', 'orderTotal'));
    }

    // Menambahkan item ke cart
    public function add(Request $request)
    {
        // Ambil data dari request
        $menuId = $request->input('menu_id');
        $quantity = max((int) $request->input('quantity'), 1);

        // Ambil data cart dari session
        $cart = session()->get('cart', []);

        // Tambahkan atau update quantity
        if (isset($cart[$menuId])) {
            $cart[$menuId]['quantity'] += $quantity;
        } else {
            $cart[$menuId] = ['quantity' => $quantity];
        }

        // Simpan kembali ke session
        session()->put('cart', $cart);

        return redirect()->route('user.cart');
    }

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
    
        // Hitung ulang total harga
        $menu = Menu::find($menuId);
        $itemTotalPrice = $cart[$menuId]['quantity'] * $menu->harga;
        $orderTotal = $this->calculateOrderTotal($cart);
    
        return response()->json([
            'quantity' => $cart[$menuId]['quantity'],
            'itemTotalPrice' => $itemTotalPrice,
            'orderTotal' => $orderTotal
        ]);
    }
    
    public function remove($menuId)
    {
        $cart = session()->get('cart', []);
    
        if (isset($cart[$menuId])) {
            unset($cart[$menuId]);
        }
    
        session()->put('cart', $cart);
    
        // Hitung ulang total harga
        $orderTotal = $this->calculateOrderTotal($cart);
    
        return response()->json(['orderTotal' => $orderTotal]);
    }
    
    private function calculateOrderTotal($cart)
    {
        $menuIds = array_keys($cart);
        $menus = Menu::whereIn('id', $menuIds)->get();
    
        $orderTotal = $menus->reduce(function ($total, $menu) use ($cart) {
            return $total + ($menu->harga * $cart[$menu->id]['quantity']);
        }, 0);
    
        return $orderTotal;
    }

    // Menyimpan order baru ke tabel order
    public function storeOrder(Request $request)
    {
        // Retrieve cart data from the session
        $cart = session()->get('cart', []);
        
        // Get menu IDs from the cart
        $menuIds = array_keys($cart);
        $menus = Menu::whereIn('id', $menuIds)->get();
    
        // Loop through menus for each item in the cart
        foreach ($menus as $menu) {
            // Get quantity from the cart
            $quantity = $cart[$menu->id]['quantity'];
    
            // Save each item as a separate order entry
            for ($i = 0; $i < $quantity; $i++) {
                Order::create([
                    'user_id' => 1, // Replace with auth()->id() when authentication is implemented
                    'nama_pesanan' => $menu->nama, // Corresponding menu name
                    'status_pesanan' => 0, // Order status: 0 means active (not yet processed)
                ]);
            }
        }
    
        // Clear the cart after saving orders
        session()->forget('cart');
    
        // Redirect to the home page with a success message
        return redirect('/home')->with('success', 'Thank you for your payment!');
    }       
}
