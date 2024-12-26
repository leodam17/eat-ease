@extends('base.base')

@section('title', 'EatEase | Home')

@section('content')
<!-- Hero Section -->
<div class="relative bg-cover bg-center h-screen" style="background-image: url('img/background.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
</div>

<!-- About Us Section -->
<div class="bg-[#ECE8D8] dark:bg-[#2b241c] text-[#4a3b2f] dark:text-[#e7d7c4] py-20">
    <div class="container mx-auto px-4 flex items-center">
        <!-- Left Side Image -->
        <div class="w-full md:w-1/3 mb-6 md:mb-0">
            <img src="{{ asset('img/about.jpg') }}" alt="About Us Image" class="w-full h-auto max-w-[300px] rounded-lg shadow-lg object-cover">
        </div>

        <!-- Right Side Text -->
        <div class="w-full md:w-2/3 text-center md:text-left">
            <h2 class="text-4xl font-bold mb-6">Why We Created EatEase</h2>
            <p class="text-lg italic mb-4">EatEase - More Than Just Food</p>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-8 leading-relaxed">
                At EatEase, we understand the challenge of choosing the perfect meal. It&apos;s a dilemma we&apos;ve all faced — standing in front of a menu, feeling overwhelmed by the countless options, unsure of what to pick, and wondering if it&apos;s the right choice. It&apos;s not just about satisfying hunger; it&apos;s about the joy of eating, the pleasure of discovering new flavors, and the delight of finding something that feels just right.
            </p>
            <a href="{{ route('about') }}" class="bg-[#d6a670] text-white py-3 px-6 rounded-md shadow-md hover:bg-[#bf8f5a] dark:hover:bg-[#a77e4a] transition">
                Learn More
            </a>
        </div>
    </div>
</div>



<!-- Menu Section -->
<div class="bg-[#e7e3d8] dark:bg-[#1e1a14] py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold mb-8 text-center text-[#4a3b2f] dark:text-[#e7d7c4]">Our Menu</h2>
        <!-- Swiper -->
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach($menus as $menu)
                <div class="swiper-slide">
                    <div class="relative rounded-lg overflow-hidden shadow-lg">
                        <!-- Background Image -->
                        <img src="{{ asset('img/' . $menu->gambar) }}" alt="{{ $menu->nama }}" class="w-full h-[300px] object-cover">
                        <!-- Overlay Content -->
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex flex-col justify-end p-4 text-white">
                            <h3 class="text-xl font-bold">{{ $menu->nama }}</h3>
                            <p class="text-sm">{{ $menu->deskripsi }}</p>
                            <p class="text-lg font-bold mt-2">${{ $menu->harga }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Navigation Buttons -->
            <div class="swiper-button-prev bg-white rounded-full w-10 h-10 flex items-center justify-center shadow-lg"></div>
            <div class="swiper-button-next bg-white rounded-full w-10 h-10 flex items-center justify-center shadow-lg"></div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
    },
});
</script>
@endsection
