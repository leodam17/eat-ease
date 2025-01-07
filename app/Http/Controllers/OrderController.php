<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
    public function orderHistory()
    {
        // Memastikan user telah login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }
    
        // Mengambil user yang sedang login
        $loggedInUser = Auth::user();
    
        // Mengambil riwayat pemesanan user
        $orders = Order::where('user_id', $loggedInUser->id)
            ->orderBy('created_at', 'asc')
            ->get();
    
        return view('user.order_history', ['orders' => $orders]);
    }
    
    
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        $status = $request->get('status');

        $orders = Order::when($status !== null, function ($query) use ($status) {
                return $query->where('status_pesanan', $status);
            })
            ->orderBy('created_at', 'asc')
            ->paginate(8);;

        return view('admin.status', compact('orders', 'status'));
    }

    public function markAsDone($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        $order = Order::findOrFail($id);

        if ($order->status_pesanan == 1) {
            return redirect()->back()->with('info', 'This order is already marked as done.');
        }

        $order->status_pesanan = 1;
        $order->save();

        return redirect()->route('orders.pending')->with('success', 'Order marked as done successfully!');
    }
}
