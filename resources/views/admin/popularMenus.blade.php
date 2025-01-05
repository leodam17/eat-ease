@extends('admin.base.base')

@section('title', 'Popular Menus')

@section('content')
<h1 class="text-5xl font-extrabold text-center">Most Popular Menus</h1>
<table class="min-w-full">
    <thead>
        <tr>
            <th>Menu Name</th>
            <th>Total Orders</th>
        </tr>
    </thead>
    <tbody>
        @foreach($popularMenus as $menu)
        <tr>
            <td>{{ $menu->nama_pesanan }}</td>
            <td>{{ $menu->total_orders }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection