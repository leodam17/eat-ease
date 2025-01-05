@extends('admin.base.base')

@section('title', 'Edit Menu')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Edit Menu: {{ $menu->nama }}</h1>

    <form action="{{ route('admin.menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Menu Name -->
        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama', $menu->nama) }}" required
                class="w-full p-2 border border-gray-300 rounded">
            @error('nama') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Category -->
        <div class="mb-4">
            <label for="kategori" class="block text-sm font-medium text-gray-700">Category</label>
            <input type="text" name="kategori" id="kategori" value="{{ old('kategori', $menu->kategori) }}" required
                class="w-full p-2 border border-gray-300 rounded">
            @error('kategori') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Price -->
        <div class="mb-4">
            <label for="harga" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="number" name="harga" id="harga" value="{{ old('harga', $menu->harga) }}" required
                class="w-full p-2 border border-gray-300 rounded">
            @error('harga') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full p-2 border border-gray-300 rounded">{{ old('deskripsi', $menu->deskripsi) }}</textarea>
            @error('deskripsi') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Preparation Time -->
        <div class="mb-4">
            <label for="waktu_pengerjaan" class="block text-sm font-medium text-gray-700">Preparation Time (minutes)</label>
            <input type="number" name="waktu_pengerjaan" id="waktu_pengerjaan" value="{{ old('waktu_pengerjaan', $menu->waktu_pengerjaan) }}" required
                class="w-full p-2 border border-gray-300 rounded">
            @error('waktu_pengerjaan') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Popularity -->
        <div class="mb-4">
            <label for="popularitas" class="block text-sm font-medium text-gray-700">Popularity</label>
            <input type="number" name="popularitas" id="popularitas" value="{{ old('popularitas', $menu->popularitas) }}" required
                class="w-full p-2 border border-gray-300 rounded">
            @error('popularitas') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Calories -->
        <div class="mb-4">
            <label for="kalori" class="block text-sm font-medium text-gray-700">Calories</label>
            <input type="number" name="kalori" id="kalori" value="{{ old('kalori', $menu->kalori) }}" required
                class="w-full p-2 border border-gray-300 rounded">
            @error('kalori') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Image -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded">
            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <div class="mb-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Menu</button>
        </div>
    </form>
</div>
@endsection
