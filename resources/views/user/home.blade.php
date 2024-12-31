@extends('base.base')

@section('title', 'EatEase | Home')

@section('content')
<style>
    /* Customize the navigation buttons color to match the beige palette */
    .swiper-button-prev, .swiper-button-next {
        color: #D1B59D; /* Beige color */
        transition: color 0.3s ease;
    }

    /* Optional: Add hover effect to darken the color */
    .swiper-button-prev:hover, .swiper-button-next:hover {
        color: #b79d6f; /* A slightly darker beige for hover effect */
    }
</style>

<!-- Hero Section -->
<div class="relative bg-cover bg-center h-screen" style="background-image: url('img/background.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    
    <div class="absolute inset-0 flex items-center justify-center text-center text-white">
        <div>
            <h1 class="text-5xl font-bold mb-4">Taste the Magic of Every Bite</h1>
            <p class="text-xl">Step into a world where every bite tells a story, and every dish is a delight.</p>
        </div>
    </div>
</div>




<!-- Menu Section -->
<div class="bg-[#e7e3d8] dark:bg-[#1e1a14] py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-6xl font-bold mb-8 text-center text-[#4a3b2f] dark:text-[#e7d7c4]" style="font-family: 'Cookie', cursive;">
            Our Menu
        </h2>

        <!-- Swiper -->
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach($menus as $menu)
                <div class="swiper-slide">
                    <div class="relative rounded-lg overflow-hidden shadow-lg">
                        <!-- Background Image -->
                        <img src="{{ asset('img/' . $menu->gambar) }}" alt="{{ $menu->nama }}" class="w-full h-[300px] object-cover">
                        <!-- Overlay Content -->
                        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                        <!-- Content -->
                        <div class="absolute inset-0 flex flex-col justify-end p-4 text-white mb-2">
                            <h3 class="text-xl font-bold">{{ $menu->nama }}</h3>
                            <p class="text-sm">{{ $menu->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Navigation Buttons -->
            <div class="swiper-button-prev text-[#D1B59D] dark:text-[#b79d6f] hover:text-[#b79d6f] dark:hover:text-[#a77e4a]"></div>
            <div class="swiper-button-next text-[#D1B59D] dark:text-[#b79d6f] hover:text-[#b79d6f] dark:hover:text-[#a77e4a]"></div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>









<!-- Recommendations Based on Preferences and Allergies -->
<div class="bg-[#ECE8D8] dark:bg-[#2b241c] py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-6xl font-bold mb-8 text-center text-[#4a3b2f] dark:text-[#e7d7c4]" style="font-family: 'Cookie', cursive;">
            Hungry, {{ $user }}? These recommendations are perfect for you!
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($recommendations_by_preferences as $menu)
                <div class="bg-[#ECE8D8] dark:bg-[#2b241c] text-[#4a3b2f] dark:text-[#e7d7c4] rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('img/' . $menu->gambar) }}" alt="{{ $menu->nama }}" class="w-full h-48 object-cover cursor-pointer">
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
                            
                            <!-- Ganti Order Now dengan form berikut -->
                            <div class="flex items-center justify-center gap-4 w-full mt-4">
                                <form action="{{ route('user.cart.add') }}" method="POST" class="flex items-center gap-4 w-full justify-center">
                                    @csrf
                                    <input type="hidden" name="menu_id" value="{{ $menu->id }}">

                                    <!-- Quantity Selector -->
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

                                    <!-- Add to Cart Button -->
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










<!-- About Us Section -->
<div class="bg-[#e7e3d8] dark:bg-[#1e1a14] text-[#4a3b2f] dark:text-[#e7d7c4] py-20">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
        <!-- Left Side Image (Posisi foto di atas pada tampilan mobile) -->
        <div class="w-full mb-6 md:mb-0 md:w-1/3 flex justify-center">
            <img src="{{ asset('img/about.jpg') }}" alt="About Us Image" class="w-full h-auto max-w-[300px] rounded-lg shadow-lg object-cover">
        </div>

        <!-- Right Side Text -->
        <div class="w-full md:w-2/3 text-center md:text-left">
            <h2 class="text-6xl font-cookie font-bold mb-6 text-[#4a3b2f] dark:text-[#e7d7c4]" style="font-family: 'Cookie', cursive;">
                Why We Created EatEase
            </h2>
            <p class="text-lg italic mb-4">EatEase - More Than Just Food</p>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-8 leading-relaxed">
                At EatEase, we understand the challenge of choosing the perfect meal. It&apos;s a dilemma we&apos;ve all faced — standing in front of a menu, feeling overwhelmed by the countless options, unsure of what to pick, and wondering if it&apos;s the right choice. It&apos;s not just about satisfying hunger; it&apos;s about the joy of eating, the pleasure of discovering new flavors, and the delight of finding something that feels just right.
            </p>
            <a href="{{ route('about') }}" class="bg-[#d6a670] text-white py-3 px-6 rounded-md shadow-md hover:bg-[#bf8f5a] dark:bg-[#a77e4a] dark:text-white dark:hover:bg-[#8f6c45] transition">
                Learn More
            </a>
        </div>
    </div>
</div>



<script>
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
</script>
@endsection
