@extends('base.base')

@section('title', 'EatEase | Home')

@section('content')
<!-- Menu Section -->
<div class="bg-[#e7e3d8] dark:bg-[#1e1a14] py-20 mt-10">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold mb-8 text-center text-[#4a3b2f] dark:text-[#e7d7c4]">Our Menu</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($menus as $menu)
            <div class="bg-[#ECE8D8] dark:bg-[#2b241c] text-[#4a3b2f] dark:text-[#e7d7c4] rounded-lg overflow-hidden shadow-lg">
                <!-- Image click triggers modal -->
                <img src="{{ asset('img/' . $menu->gambar) }}" alt="{{ $menu->nama }}" class="w-full h-48 object-cover cursor-pointer" onclick="openModal('{{ asset('img/' . $menu->gambar) }}')">
                <div class="p-4">
                    <h3 class="text-lg font-bold mb-2">{{ $menu->nama }}</h3>
                    <p class="text-sm mb-4">{{ $menu->deskripsi }}</p>
                    <div class="flex items-center justify-between text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-4">
                        <span><i class="fas fa-clock"></i> {{ $menu->waktu_pengerjaan }} mins</span>
                        <span>{{ $menu->kalori }} kcal</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-[#d6a670] dark:text-[#bf8f5a]">
                            @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star{{ $menu->popularitas < $i ? '-half-alt' : '' }}"></i>
                            @endfor
                        </span>
                        <div class="flex items-center gap-2">
                            <!-- Quantity Input -->
                            <input type="number" min="1" value="1" class="w-16 text-center border border-[#d6a670] rounded-md text-sm text-[#4a3b2f] dark:text-[#e7d7c4] dark:bg-[#2b241c] focus:outline-none focus:ring-2 focus:ring-[#bf8f5a]">
                            <!-- Add to Cart Button -->
                            <button class="bg-[#d6a670] text-white py-2 px-4 rounded-md shadow-md hover:bg-[#bf8f5a] dark:hover:bg-[#a77e4a] transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal for Image Preview -->
<div id="imageModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="relative bg-[#f5f1e6] dark:bg-[#2b241c] text-[#4a3b2f] dark:text-[#e7d7c4] rounded-lg p-4 w-11/12 max-w-4xl">
        <!-- Close Button -->
        <button type="button" class="absolute top-2 right-2 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
            onclick="closeModal()">
            <strong>✕</strong>
        </button>
        <!-- Modal Image -->
        <img id="modalImage" src="" alt="Image Preview" class="w-full max-h-[70vh] rounded-lg object-contain">
    </div>
</div>

<script>
// Open Modal Function
function openModal(image) {
    document.getElementById('modalImage').src = image;
    document.getElementById('imageModal').classList.remove('hidden');
}

// Close Modal Function
function closeModal() {
    document.getElementById('imageModal').classList.add('hidden');
}
</script>
@endsection
