@extends('base.base')

@section('title', 'EatEase | Home')

@section('content')
<style>
    .swiper-button-prev, .swiper-button-next {
        color: #D1B59D;
        transition: color 0.3s ease;
    }

    .swiper-button-prev:hover, .swiper-button-next:hover {
        color: #b79d6f;
    }
</style>


<!-- Hero Section -->
<div class="relative bg-cover bg-center h-screen" style="background-image: url('img/background.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    
    <div class="absolute inset-0 flex items-center justify-center text-center text-white">
        <div>
            <h1 class="text-5xl font-bold mb-4" style="font-family: 'Playfair Display', serif;">Taste the Magic of Every Bite</h1>
            <p class="text-xl">Step into a world where every bite tells a story, and every dish is a delight.</p>
        </div>
    </div>
</div>


<!-- Menu -->
<div class="bg-[#e7e3d8] dark:bg-[#1e1a14] py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-6xl font-bold mb-8 text-center text-[#4a3b2f] dark:text-[#e7d7c4]" style="font-family: 'Cookie', cursive;">
            Your Next Meal Awaits
        </h2>

        <!-- Carousel -->
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach($menus as $menu)
                <div class="swiper-slide">
                    <div class="relative rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('img/' . $menu->gambar) }}" alt="{{ $menu->nama }}" class="w-full h-[300px] object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                        <div class="absolute inset-0 flex flex-col justify-end p-4 text-white mb-2">
                            <h3 class="text-xl font-bold">{{ $menu->nama }}</h3>
                            <p class="text-sm">{{ $menu->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Prev dan Next -->
            <div class="swiper-button-prev text-[#D1B59D] dark:text-[#b79d6f] hover:text-[#b79d6f] dark:hover:text-[#a77e4a]"></div>
            <div class="swiper-button-next text-[#D1B59D] dark:text-[#b79d6f] hover:text-[#b79d6f] dark:hover:text-[#a77e4a]"></div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>


<!-- Rekomendasi -->
<div class="bg-[#ECE8D8] dark:bg-[#2b241c] py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-6xl font-bold mb-8 text-center text-[#4a3b2f] dark:text-[#e7d7c4]" style="font-family: 'Cookie', cursive;">
            Hungry, {{ $user }}? These recommendations are perfect for you!
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($recommendations as $menu)
            <div class="bg-[#ECE8D8] dark:bg-[#3e352f] text-[#4a3b2f] dark:text-[#e7d7c4] rounded-lg overflow-hidden shadow-lg">
            <img src="{{ asset('img/' . $menu->gambar) }}" alt="{{ $menu->nama }}" class="w-full h-48 object-cover cursor-pointer" onclick="openModal('{{ asset('img/' . $menu->gambar) }}')">
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">{{ $menu->nama }}</h3>
                        <p class="text-sm mb-4">{{ $menu->deskripsi }}</p>
                        
                        <div class="flex items-center justify-between text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-4">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 inline mr-2">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                                </svg>
                                {{ $menu->waktu_pengerjaan }} mins
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 inline mr-2">
                                    <path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 0 0-1.071-.136 9.742 9.742 0 0 0-3.539 6.176 7.547 7.547 0 0 1-1.705-1.715.75.75 0 0 0-1.152-.082A9 9 0 1 0 15.68 4.534a7.46 7.46 0 0 1-2.717-2.248ZM15.75 14.25a3.75 3.75 0 1 1-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 0 1 1.925-3.546 3.75 3.75 0 0 1 3.255 3.718Z" clip-rule="evenodd" />
                                </svg>
                                {{ $menu->kalori }} kcal
                            </span>

                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                                </svg>
                                <span>{{ $menu->popularitas }}/10</span>
                            </span>
                        </div>

                        <p class="text-lg font-bold text-[#b68f29] dark:text-[#d4af37] mb-4">
                            Rp{{ number_format($menu->harga, 0, ',', '.') }}<span class="text-xs inline">,00</span>
                        </p>

                        <div class="flex items-center justify-between">
                            <span class="text-[#d6a670] dark:text-[#bf8f5a]">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star{{ $menu->popularitas < $i ? '-half-alt' : '' }}"></i>
                                @endfor
                            </span>
                            
                            <div class="flex items-center justify-center gap-4 w-full mt-4">
                                <form action="{{ route('user.cart.add') }}" method="POST" class="flex items-center gap-4 w-full justify-center">
                                    @csrf
                                    <input type="hidden" name="menu_id" value="{{ $menu->id }}">

                                    <div class="flex items-center rounded-lg bg-[#d6a670] dark:bg-[#c58a50] overflow-hidden max-w-[150px]">
                                        <button type="button"
                                            class="w-8 h-8 flex items-center justify-center text-white hover:bg-[#c89550] dark:hover:bg-[#ad7640] transition-colors text-sm"
                                            onclick="updateQuantity('decrease', '{{ $menu->id }}')">-</button>
                                        <input id="quantity-{{ $menu->id }}" name="quantity" type="number" value="1"
                                            class="w-12 h-8 text-center bg-[#d6a670] dark:bg-[#c58a50] text-white text-sm border-0 focus:outline-none">
                                        <button type="button"
                                            class="w-8 h-8 flex items-center justify-center text-white hover:bg-[#c89550] dark:hover:bg-[#ad7640] transition-colors text-sm"
                                            onclick="updateQuantity('increase', '{{ $menu->id }}')">+</button>
                                    </div>

                                    <button type="submit"
                                        class="px-4 py-2 bg-[#d6a670] dark:bg-[#c58a50] text-white hover:bg-[#c89550] dark:hover:bg-[#ad7640] transition-colors rounded-lg font-medium text-sm">
                                        Add to Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<!-- Modal -->
<div id="imageModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="relative bg-[#f5f1e6] dark:bg-[#2b241c] text-[#4a3b2f] dark:text-[#2b241c] rounded-lg p-4 w-11/12 max-w-4xl">
        <!-- Tombol Close -->
        <button type="button" class="absolute top-2 right-2 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
            onclick="closeModal()">
            <strong>✕</strong>
        </button>
        <img id="modalImage" src="" alt="Image Preview" class="w-full max-h-[70vh] rounded-lg object-contain">
    </div>
</div>


<!-- About Us -->
<div class="bg-[#e7e3d8] dark:bg-[#1e1a14] text-[#4a3b2f] dark:text-[#e7d7c4] py-20">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
        <div class="w-full mb-6 md:mb-0 md:w-1/3 flex justify-center">
            <img src="{{ asset('img/about.webp') }}" alt="About Us Image" class="w-full h-auto max-w-[300px] rounded-lg shadow-lg object-cover">
        </div>

        <div class="w-full md:w-2/3 text-center md:text-left">
            <h2 class="text-6xl font-cookie font-bold mb-6 text-[#4a3b2f] dark:text-[#e7d7c4]" style="font-family: 'Cookie', cursive;">
                Why We Created EatEase
            </h2>
            <p class="text-lg italic mb-4">EatEase - More Than Just Food</p>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-8 leading-relaxed">
                At EatEase, we understand the challenge of choosing the perfect meal. It&apos;s a dilemma we&apos;ve all faced — standing in front of a menu, feeling overwhelmed by the countless options, unsure of what to pick, and wondering if it&apos;s the right choice. It&apos;s not just about satisfying hunger; it&apos;s about the joy of eating, the pleasure of discovering new flavors, and the delight of finding something that feels just right.
            </p>
            <a href="{{ route('user.about') }}" class="bg-[#d6a670] text-white py-3 px-6 rounded-md shadow-md hover:bg-[#bf8f5a] dark:bg-[#a77e4a] dark:text-white dark:hover:bg-[#8f6c45] transition">
                Learn More
            </a>
        </div>
    </div>
</div>


<script>
// Carousel
const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    grabCursor: true,
    effect: 'coverflow',
    coverflowEffect: {
        rotate: 30,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows: true,
    },
    breakpoints: {
        640: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return `<span class="${className} bg-[#D1B59D] dark:bg-[#b79d6f] w-2 h-2 rounded-full mx-1"></span>`;
        },
    },
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
});

// Update quantity
function updateQuantity(action, menuId) {
        const input = document.getElementById(`quantity-${menuId}`);
        let currentValue = parseInt(input.value) || 1;

        if (action === 'increase') {
            input.value = currentValue + 1;
        } else if (action === 'decrease' && currentValue > 1) {
            input.value = currentValue - 1;
        }
    }

// Add to cart
function addToCart(menuId) {
    const quantity = parseInt(document.getElementById(`quantity-${menuId}`).textContent) || 0;

    if (quantity > 0) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        const existingItem = cart.find(item => item.menuId === menuId);

        if (existingItem) {
            existingItem.quantity += quantity;
        } else {
            cart.push({ menuId, quantity });
        }

        localStorage.setItem('cart', JSON.stringify(cart));

        alert(`Added ${quantity} of this item to your cart!`);
    } else {
        alert('Please select a valid quantity.');
    }
}

// Membuka modal
function openModal(imageSrc) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    modalImage.src = imageSrc;
    modal.classList.remove('hidden');
}

// Menutup modal
function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.add('hidden');
}
</script>
@endsection
