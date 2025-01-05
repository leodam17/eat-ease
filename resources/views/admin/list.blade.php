@extends('admin.base.base')

@section('title', 'List Menu')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">List Menu</h1>

    <div class="mb-4">
        <a href="{{ route('admin.menu.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Add New Menu</a>
    </div>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Order ID</th>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Category</th>
                <th class="py-2 px-4 border-b">Price</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
            <tr>
                <td class="py-2 px-4 border-b">{{ $menu->id }}</td>
                <td class="py-2 px-4 border-b">{{ $menu->nama }}</td>
                <td class="py-2 px-4 border-b">{{ $menu->kategori }}</td>
                <td class="py-2 px-4 border-b">{{ $menu->harga }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('admin.menu.edit', $menu->id) }}" class="text-blue-500 hover:underline">Edit</a> |
                    <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this menu?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
