@extends('admin.base.base')

@section('title', 'Add Menu')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Add New Menu</h1>
    <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="nama" id="nama" class="mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="kategori" class="block text-sm font-medium text-gray-700">Category</label>
            <input type="text" name="kategori" id="kategori" class="mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="harga" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="number" name="harga" id="harga" class="mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="deskripsi" id="deskripsi" class="mt-1 block w-full"></textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full">
        </div>

        <div class="mb-4">
            <label for="waktu_pengerjaan" class="block text-sm font-medium text-gray-700">Preparation Time (minutes)</label>
            <input type="number" name="waktu_pengerjaan" id="waktu_pengerjaan" class="mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="popularitas" class="block text-sm font-medium text-gray-700">Popularity</label>
            <input type="number" name="popularitas" id="popularitas" class="mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="kalori" class="block text-sm font-medium text-gray-700">Calories</label>
            <input type="number" name="kalori" id="kalori" class="mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Menu</button>
        </div>
    </form>
</div>
@endsection
