<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function orderHistory()
    {
        // Pastikan user telah login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        // Ambil user yang sedang login
        $loggedInUser = Auth::user();

        // Ambil riwayat pemesanan user dari database
        $orders = Order::where('user_id', $loggedInUser->id)
            ->orderBy('created_at', 'asc')
            ->get();

        // Group orders by date
        $groupedOrders = $orders->groupBy(function ($order) {
            return Carbon::parse($order->created_at)->format('d M Y'); // Format: 'day month year'
        });

        // Tampilkan view dengan data order history
        return view('user.order_history', ['groupedOrders' => $groupedOrders]);
    }
}
