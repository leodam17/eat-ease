@extends('admin.base.base')

@section('content')
<div class="container">
    <h2>User's Order History</h2>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Order Name</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $order->nama_pesanan }}</td>
                <td>{{ $order->status_pesanan == 0 ? 'Active' : 'Completed' }}</td>
                <td>{{ $order->created_at->format('d M Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
