@extends('base.base')
@php
    use Carbon\Carbon;
@endphp

@section('title', 'EatEase | Order History')

@section('content')
<style>
/* Base Styles */
.cart-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 2rem;
}

.cart-table th, 
.cart-table td {
    text-align: center;
    padding: 1rem;
    border-bottom: 1px solid #d1c6b1;
    color: #4a3b2f; /* Light mode text color */
}

.cart-table th {
    background-color: transparent;
    font-weight: bold;
}

.cart-table tbody tr:last-child td {
    border-bottom: none;
}

.cart-table td img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 8px;
}

.cart-table td .product-details {
    font-size: 0.9rem;
}

/* Dark Mode Styles */
.cart-table th.dark\:bg-[#333030] {
    background-color: #333030;
}

.cart-table th.dark\:text-[#e7e3d8] {
    color: #e7e3d8;
}

.cart-table td.dark\:text-[#e7e3d8] {
    color: #e7e3d8; /* Dark mode text color */
}

/* Background Colors */
.min-h-screen {
    background-color: #e7e3d8;
}

.dark\:bg-[#1e1a14] {
    background-color: #1e1a14;
}

/* Table Styling */
.table-header {
    font-size: 1.5rem;
    font-weight: bold;
    color: #4a3b2f;
    margin-bottom: 1rem;
    font-family: 'Amatic SC', cursive;
}

.text-primary {
    color: #d6a670;
}

.text-primary:hover {
    color: #c89550;
}

/* Status Colors */
.status-pending {
    background-color: #ffb947;
    color: white;
    padding: 0.25rem 0.5rem;
    border-radius: 8px;
}

.status-done {
    background-color: #4CAF50;
    color: white;
    padding: 0.25rem 0.5rem;
    border-radius: 8px;
}

.text-center {
    text-align: center;
}
</style>

<!-- Header Section with Background Image -->
<div class="relative w-full h-[400px] bg-cover bg-center" style="background-image: url('{{ asset('img/history.webp') }}');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center">
        <!-- Breadcrumb -->
        <div class="text-white text-sm mb-4">
            <a href="/home" class="hover:underline">Home</a>
            <span class="mx-2">></span>
            <span>Order History</span>
        </div>
        <!-- Title -->
        <h1 class="text-4xl font-bold text-white">Your Order History</h1>
    </div>
</div>

<div class="min-h-screen bg-[#e7e3d8] dark:bg-[#1e1a14] py-12 mt-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        @if(count($groupedOrders) > 0)
            <!-- Grouped Order History Table -->
            @foreach ($groupedOrders as $date => $orders)
                <div class="table-header text-primary">{{ $date }}</div>
                <div class="overflow-x-auto">
                    <table class="cart-table w-full text-center border-collapse">
                        <thead>
                            <tr>
                                <th class="bg-[#f8f4ec] text-[#4a3b2f] dark:bg-[#333030] dark:text-[#e7e3d8] py-3 px-4 rounded-l-lg">Order ID</th>
                                <th class="bg-[#f8f4ec] text-[#4a3b2f] dark:bg-[#333030] dark:text-[#e7e3d8] py-3 px-4">Menu</th>
                                <th class="bg-[#f8f4ec] text-[#4a3b2f] dark:bg-[#333030] dark:text-[#e7e3d8] py-3 px-4">Status</th>
                                <th class="bg-[#f8f4ec] text-[#4a3b2f] dark:bg-[#333030] dark:text-[#e7e3d8] py-3 px-4 rounded-r-lg">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr class="hover:bg-[#f8f4ec] dark:hover:bg-[#333030]">
                                    <td class="py-4 px-4 dark:text-[#e7e3d8]">{{ $order->id }}</td>
                                    <td class="py-4 px-4 dark:text-[#e7e3d8]">{{ $order->nama_pesanan }}</td>
                                    <td class="py-4 px-4 dark:text-[#e7e3d8]">
                                        @if($order->status_pesanan == 0)
                                            <span class="status-pending">Pending</span>
                                        @elseif($order->status_pesanan == 1)
                                            <span class="status-done">Done</span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-4 dark:text-[#e7e3d8]">
                                        {{ Carbon::parse($order->created_at)->setTimezone('Asia/Jakarta')->format('d M Y, H:i') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        @else
            <!-- Empty Cart Message -->
            <div class="message-box">
                <h2 class="text-2xl font-bold text-[#4a3b2f] dark:text-[#e7e3d8]">Oops, you haven't ordered yet!</h2>
                <p class="text-base text-[#6b4f3b] dark:text-[#d1c7b0] mt-4">
                    <em>
                    "Looks like you haven't added anything yet! Browse our menu and find something yummy 🍔 and refreshing ☕!"
                    </em>
                </p>
                <a href="{{ url('/menu') }}" class="mt-6 inline-block bg-[#d6a670] hover:bg-[#c89550] text-white font-bold py-2 px-4 rounded dark:bg-[#9a7f48] dark:hover:bg-[#7c6539]">
                    Explore Menu 🍽️
                </a>
            </div>
        @endif
    </div>
</div>

@endsection
