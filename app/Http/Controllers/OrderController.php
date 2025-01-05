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

//     public function viewOrdersByStatus(){
//     // Make sure the admin is logged in
//     if (!Auth::check()) {
//         return redirect()->route('login')->with('error', 'Please login first.');
//     }

//     // Get orders based on the status using raw DB query
//     $orders = DB::table('order')
//         ->where('status_pesanan', $status)
//         ->orderBy('created_at', 'asc')
//         ->get();

//     // If you need to get the user name for each order, you can join with the users table
//     // You can also use `leftJoin` if not all orders have associated users
//     $ordersWithUserNames = DB::table('orders')
//         ->leftJoin('users', 'orders.user_id', '=', 'users.id')
//         ->where('orders.status_pesanan', $status)
//         ->select('orders.id', 'users.name as user_name', 'orders.status_pesanan', 'orders.created_at')
//         ->orderBy('orders.created_at', 'asc')
//         ->get();

//     // Return the view with orders filtered by status
//     return view('admin.orders.status', ['orders' => $ordersWithUserNames, 'status' => $status]);
// }

public function index()
{
    // Fetch all orders from the database
    $orders = Order::all();

    // Return the view with the orders data
    return view('admin.status', compact('orders'));
}

    public function pendingOrders()
{
    // Pastikan user telah login
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Please login first.');
    }

    // Ambil order dengan status 0 (Pending)
    $pendingOrders = Order::where('status_pesanan', 0)
        ->orderBy('created_at', 'asc')
        ->get();

    return view('admin.pending', ['pendingOrders' => $pendingOrders]);
}

public function markAsDone($id)
{
    // Pastikan user telah login
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Please login first.');
    }

    // Ambil order berdasarkan ID
    $order = Order::findOrFail($id);

    // Pastikan order belum selesai
    if ($order->status_pesanan == 1) {
        return redirect()->back()->with('info', 'This order is already marked as done.');
    }

    // Perbarui status order menjadi 1 (Done)
    $order->status_pesanan = 1;
    $order->save();

    // Tambahkan logika untuk menambah total pemesanan user jika diperlukan
    $user = $order->user; // Pastikan relasi user sudah ada di model Order
    $user->increment('total_pemesanan'); // Tambahkan total pemesanan

    return redirect()->route('orders.pending')->with('success', 'Order marked as done successfully!');
}
}
