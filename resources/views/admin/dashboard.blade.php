@extends('admin.base.base')

@section('title', 'Dashboard Admin')

<style>

.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination li {
    list-style: none;
    margin: 0 5px;
}

.pagination li a, .pagination li span {
    display: inline-block;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    color: #333;
    text-decoration: none;
}

.pagination li.active span {
    background-color: #007bff;
    color: white;
    border-color: #007bff;
}

</style>

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-5">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#808080" class="bi bi-megaphone-fill mb-5" viewBox="0 0 16 16">
                <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06"/>
              </svg>
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">TOTAL MENU</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-6xl">{{ $totalMenu }}</p>
        </div>

        <div class="max-w-sm p-6 bg-red border border-red-500 rounded-lg shadow dark:bg-red-500 dark:border-red-400">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" class="bi bi-cart-check-fill mb-5" viewBox="0 0 16 16">
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708"/>
              </svg>
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">TOTAL ORDERS</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-800 text-6xl">{{ $totalOrder }}</p>
        </div>

    </div>
    
    @if($orders->isEmpty())
        <p>Tidak ada data order tersedia.</p>
    @else
        <table style="border-collapse: collapse; width: 100%; border: 1px solid black;" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th style="border: 1px solid black;">Cust ID</th>
                    <th style="border: 1px solid black;">Nama Pesanan</th>
                    <th style="border: 1px solid black;">Status Pesanan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td style="border: 1px solid black;">{{ $order->user_id }}</td>
                        <td style="border: 1px solid black;">{{ $order->nama_pesanan }}</td>
                        <td style="border: 1px solid black;">{{ $order->status_pesanan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Tampilkan pagination -->
        <div style="margin-top: 20px;">
            {{ $orders->links() }}
        </div>
    @endif
@endsection
