@extends('admin.base.base')

@section('title', 'List Menu')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-5xl font-extrabold text-center text-gray-800 dark:text-black mt-3 mb-6">LIST MENU</h1>

    <div class="mb-4">
        <a href="{{ route('admin.menu.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
            Add New Menu
        </a>
    </div>

    <div class="overflow-x-auto shadow-lg rounded-lg">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead class="bg-cyan-600 text-white uppercase text-sm">
                <tr>
                    <th class="py-4 px-6 text-left border-b">Order ID</th>
                    <th class="py-4 px-6 text-left border-b">Menu Name</th>
                    <th class="py-4 px-6 text-left border-b">Category</th>
                    <th class="py-4 px-6 text-left border-b">Price</th>
                    <th class="py-4 px-6 text-left border-b">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($menus as $menu)
                <tr class="hover:bg-gray-100">
                    <td class="py-4 px-6 border-b">{{ $menu->id }}</td>
                    <td class="py-4 px-6 border-b">{{ $menu->nama }}</td>
                    <td class="py-4 px-6 border-b">{{ $menu->kategori }}</td>
                    <td class="py-4 px-6 border-b">{{ $menu->harga }}</td>
                    <td class="py-4 px-6 border-b flex space-x-2">
                        <!-- Tombol Edit -->
                        <a href="{{ route('admin.menu.edit', $menu->id) }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600 transition ease-in-out duration-200 flex items-center space-x-2">
                            <i class="fa-regular fa-pen-to-square"></i>
                            <span>Edit</span>
                        </a>

                        <!-- Tombol Delete -->
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

    <div class="mt-6">
        {{ $menus->links('pagination::tailwind') }}
    </div>
</div>
@endsection
