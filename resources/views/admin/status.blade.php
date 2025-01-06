@extends('admin.base.base')

@section('title', 'Pending Orders')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Pending Orders</h1>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Order ID</th>
                <th class="py-2 px-4 border-b">User Name</th>
                <th class="py-2 px-4 border-b">Status</th>
                <th class="py-2 px-4 border-b">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td class="py-2 px-4 border-b">{{ $order->id }}</td>
                <td class="py-2 px-4 border-b">{{ $order->nama_pesanan }}</td>
                <td class="py-2 px-4 border-b">{{ $order->status_pesanan == 0 ? 'Pending' : 'Completed' }}</td>
                <td class="py-2 px-4 border-b">
                    {{-- <a href="{{ route('orders.markAsDone', $order->id) }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Mark as Done</a> --}}
                    @if ($order->status_pesanan == 0) <!-- Tampilkan tombol hanya jika status Pending -->
                    <form action="{{ route('orders.markAsDone', $order->id) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                            Mark as Done
                        </button>
                    </form>
                @else
                    <span class="text-gray-500">Completed</span>
                @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
