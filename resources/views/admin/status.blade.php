@extends('admin.base.base') 

@section('title', 'Pending Orders')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-5xl font-extrabold text-center text-gray-800 dark:text-black mt-3 mb-6">PENDING ORDERS</h1>

    <div class="overflow-x-auto shadow-lg rounded-lg">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead class="bg-cyan-600 text-white uppercase text-sm">
                <tr>
                    <th class="py-4 px-6 text-left border-b">Order ID</th>
                    <th class="py-4 px-6 text-left border-b">Menu Name</th>
                    <th class="py-4 px-6 text-left border-b">Status</th>
                    <th class="py-4 px-6 text-left border-b">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($orders as $order)
                <tr class="hover:bg-gray-100">
                    <td class="py-4 px-6 border-b">{{ $order->id }}</td>
                    <td class="py-4 px-6 border-b">{{ $order->nama_pesanan }}</td>
                    <td class="py-4 px-6 border-b">{{ $order->status_pesanan == 0 ? 'Pending' : 'Completed' }}</td>
                    <td class="py-4 px-6 border-b">
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

    <div class="mt-6">
        {{ $orders->links('pagination::tailwind') }}
    </div>
</div>
@endsection
