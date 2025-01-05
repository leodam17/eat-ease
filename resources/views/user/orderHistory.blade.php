@extends('base.base')

@section('title', 'Order History')

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

/* Quantity Controls */
.quantity-controls {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.quantity-btn {
    font-weight: bold;
    padding: 0.4rem 0.6rem;
    border: 1px solid #c2b5a3;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.2s ease;
    min-width: 30px; /* Ensures consistent button size */
    text-align: center;
}

.quantity-input {
    width: 50px;
    text-align: center;
    border: 1px solid #c2b5a3;
    border-radius: 4px;
    padding: 0.3rem;
}

.summary-container {
    margin-top: 2rem;
    padding: 1rem 0;
    display: flex;
    justify-content: space-between;
    font-size: 1rem;
    font-weight: bold;
    text-align: center;
}

/* Dark Mode Styles */
.cart-table th.dark\:bg-[#333030] {
    background-color: #333030;
}

.cart-table th.dark\:text-[#e7e3d8] {
    color: #e7e3d8;
}

.quantity-input.dark\:bg-[#333030] {
    background-color: #333030;
}

.summary-container.dark\:text-[#e7e3d8] {
    color: #e7e3d8;
}

/* Background Colors */
.min-h-screen {
    background-color: #e7e3d8;
}

.dark\:bg-[#1e1a14] {
    background-color: #1e1a14;
}
</style>

<div class="container mx-auto px-4 py-10">
    <h1 class="text-5xl font-extrabold text-center mb-8">Your Order History</h1>

    @if(count($orderHistory) > 0)
            <a href="{{ url('/menu') }}" class="inline-block bg-[#d6a670] hover:bg-[#c89550] text-white font-medium py-1.5 px-3 rounded dark:bg-[#9a7f48] dark:hover:bg-[#7c6539] mb-4 text-sm">
                Back to Menu
            </a>
    @endif
    
    @if($orderHistory->isEmpty())
        <p class="text-center text-lg text-gray-500">You have no order history.</p>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
                <thead>
                    <tr class="bg-gray-100 text-gray-600">
                        <th class="py-3 px-4 border-b">Order ID</th>
                        <th class="py-3 px-4 border-b">Menu Name</th>
                        <th class="py-3 px-4 border-b">Status</th>
                        <th class="py-3 px-4 border-b">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orderHistory as $order)
                    <tr class="hover:bg-gray-50">
                        <td class="py-4 px-4 border-b">{{ $order->id }}</td>
                        <td class="py-4 px-4 border-b">{{ $order->nama_pesanan }}</td>
                        <td class="py-4 px-4 border-b">{{ $order->status_pesanan == 0 ? 'Active' : 'Completed' }}</td>
                        <td class="py-4 px-4 border-b">{{ $order->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection