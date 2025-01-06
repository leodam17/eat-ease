@extends('admin.base.base')

@section('title', 'List Menu')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">List Menu</h1>

    <div class="mb-4">
        <a href="{{ route('admin.menu.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
            Add New Menu
        </a>
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
                <td class="py-2 px-4 border-b flex space-x-2">
                    <!-- Edit Button with Icon and Text -->
                    <a href="{{ route('admin.menu.edit', $menu->id) }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600 transition ease-in-out duration-200 flex items-center space-x-2">
                        <i class="fa-regular fa-pen-to-square"></i>
                        <span>Edit</span>
                    </a>

                    <!-- Delete Button with Icon and Text -->
                    <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this menu?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition ease-in-out duration-200 flex items-center space-x-2">
                            <i class="fa-solid fa-trash"></i>
                            <span>Delete</span>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
