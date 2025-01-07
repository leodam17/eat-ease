@extends('admin.base.base')

@section('title', 'Add Menu')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4"> Add New Menu</h1>
    <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input value="0" type="hidden" name="total_pemesanan" >
        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="nama" id="nama" class="mt-1 block w-full" required>
        </div>

        <div class="mb-4">
            <label for="kategori" class="block text-sm font-medium text-gray-700">Category</label>
            <select name="kategori" id="kategori" 
                class="w-full bg-white border border-white text-black rounded-lg py-3 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-black shadow-sm">
                <option value="" disabled selected class="text-black">Select Category</option>
                <option value="normal" class="text-black">Normal</option>
                <option value="vege/vegan" class="text-black">Vege/Vegan</option>
                <option value="spicy" class="text-black">Spicy</option>
                <option value="dessert" class="text-black">Dessert</option>
            </select>
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
            <label for="gambar" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="gambar" id="gambar" class="mt-1 block w-full">
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
