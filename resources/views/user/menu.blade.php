@extends('base.base')

@section('title', 'EatEase | Menu')

@section('content')
<!-- Menu Section -->
<div class="bg-[#e7e3d8] dark:bg-[#1e1a14] py-20 mt-10">
    <div class="container mx-auto px-4">
        <h2 class="text-6xl font-bold mb-8 text-center text-[#4a3b2f] dark:text-[#e7d7c4]" style="font-family: 'Cookie', cursive;">
            Our Menu
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($menus as $menu)
            <div class="bg-[#ECE8D8] dark:bg-[#2b241c] text-[#4a3b2f] dark:text-[#e7d7c4] rounded-lg overflow-hidden shadow-lg">
                <!-- Image click triggers modal -->
                <img src="{{ asset('img/' . $menu->gambar) }}" alt="{{ $menu->nama }}" class="w-full h-48 object-cover cursor-pointer" onclick="openModal('{{ asset('img/' . $menu->gambar) }}')">
                <div class="p-4">
                    <h3 class="text-lg font-bold mb-2">{{ $menu->nama }}</h3>
                    <p class="text-sm mb-4">{{ $menu->deskripsi }}</p>
                    <div class="flex items-center justify-between text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-4">
                        <span class="flex items-center">
                            <!-- Icon for waktu pengerjaan -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                            </svg>
                            {{ $menu->waktu_pengerjaan }} mins
                        </span>
                        <span class="flex items-center">
                            <!-- Icon for kcal -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
                                <path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 0 0-1.071-.136 9.742 9.742 0 0 0-3.539 6.176 7.547 7.547 0 0 1-1.705-1.715.75.75 0 0 0-1.152-.082A9 9 0 1 0 15.68 4.534a7.46 7.46 0 0 1-2.717-2.248ZM15.75 14.25a3.75 3.75 0 1 1-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 0 1 1.925-3.546 3.75 3.75 0 0 1 3.255 3.718Z" clip-rule="evenodd" />
                            </svg>
                            {{ $menu->kalori }} kcal
                        </span>
                    </div>

                    <!-- Display the price with a different color -->
                    <p class="text-lg font-bold text-[#b68f29] dark:text-[#d4af37] mb-4">
                        Rp{{ number_format($menu->harga, 0, ',', '.') }}<span class="text-xs inline">,00</span>
                    </p>


                    <div class="flex flex-col items-center gap-2">
                        <form action="{{ route('user.cart.add') }}" method="POST" class="flex items-center gap-2">
                            @csrf
                            <input type="hidden" name="menu_id" value="{{ $menu->id }}">

                            <!-- Quantity Selector -->
                            <div class="flex items-center rounded-lg bg-[#d6a670] dark:bg-[#c58a50] overflow-hidden max-w-[150px] mx-auto">
                                <button type="button"
                                    class="w-8 h-8 flex items-center justify-center text-white hover:bg-[#c89550] dark:hover:bg-[#ad7640] transition-colors text-sm"
                                    onclick="updateQuantity('decrease', '{{ $menu->id }}')">-</button>
                                <input id="quantity-{{ $menu->id }}" name="quantity" type="number" value="1"
                                    class="w-12 h-8 text-center bg-[#d6a670] dark:bg-[#c58a50] text-white text-sm border-0 focus:outline-none">
                                <button type="button"
                                    class="w-8 h-8 flex items-center justify-center text-white hover:bg-[#c89550] dark:hover:bg-[#ad7640] transition-colors text-sm"
                                    onclick="updateQuantity('increase', '{{ $menu->id }}')">+</button>
                            </div>


                            <!-- Add to Cart Button -->
                            <button type="submit"
                                class="px-4 py-2 bg-[#d6a670] dark:bg-[#c58a50] text-white hover:bg-[#c89550] dark:hover:bg-[#ad7640] transition-colors rounded-lg font-medium text-sm">
                                Add to Cart
                            </button>
                        </form>
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
    function updateQuantity(action, menuId) {
        const input = document.getElementById(`quantity-${menuId}`);
        let currentValue = parseInt(input.value) || 1;

        if (action === 'increase') {
            input.value = currentValue + 1;
        } else if (action === 'decrease' && currentValue > 1) {
            input.value = currentValue - 1;
        }
    }

// Function to add item to cart
function addToCart(menuId) {
    const quantity = parseInt(document.getElementById(`quantity-${menuId}`).textContent) || 0;

    if (quantity > 0) {
        // Example of adding item to cart (storing in localStorage for simplicity)
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        // Check if the item is already in the cart
        const existingItem = cart.find(item => item.menuId === menuId);

        if (existingItem) {
            existingItem.quantity += quantity; // Increase quantity if item is already in cart
        } else {
            cart.push({ menuId, quantity });
        }

        // Save the updated cart back to localStorage
        localStorage.setItem('cart', JSON.stringify(cart));

        alert(`Added ${quantity} of this item to your cart!`);
    } else {
        alert('Please select a valid quantity.');
    }
}

// Function to open image in modal
function openModal(imageSrc) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    modalImage.src = imageSrc;
    modal.classList.remove('hidden');
}

// Function to close the modal
function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.add('hidden');
}
</script>

@endsection
