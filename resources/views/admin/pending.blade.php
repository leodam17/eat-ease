blade 

@extends('admin.base.base')

@section('title', 'Pending Orders')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-2xl font-bold mb-6">Pending Orders</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($pendingOrders->count() > 0)
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr>
                    <th class="border-b py-2">Order ID</th>
                    <th class="border-b py-2">Menu</th>
                    <th class="border-b py-2">Status</th>
                    <th class="border-b py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendingOrders as $order)
                    <tr>
                        <td class="border-b py-2 text-center">{{ $order->id }}</td>
                        <td class="border-b py-2 text-center">{{ $order->nama_pesanan }}</td>
                        <td class="border-b py-2 text-center">Pending</td>
                        <td class="border-b py-2 text-center">
                            <form action="{{ route('orders.markAsDone', $order->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                                    Mark as Done
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center text-gray-600">No pending orders at the moment.</p>
    @endif
</div>
@endsection