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

    <h1 class="text-5xl font-extrabold text-center text-gray-800 dark:text-black mt-10 mb-6">
        DASHBOARD ADMIN!
    </h1>
    
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
