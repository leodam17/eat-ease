@extends('base.base')

@section('title', 'EatEase | About Us')

@section('content')
<!-- Header Section with Background Image -->
<div class="relative w-full h-[400px] bg-cover bg-center" style="background-image: url('{{ asset('img/about.webp') }}');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center">
        <!-- Breadcrumb -->
        <div class="text-white text-sm mb-4">
            <a href="/home" class="hover:underline">Home</a>
            <span class="mx-2">></span>
            <span>About</span>
        </div>
        <!-- Title -->
        <h1 class="text-4xl font-bold text-white">Our Story</h1>
    </div>
</div>

<!-- Content Section -->
<div class="bg-[#e7e3d8] dark:bg-[#1e1a14] text-[#4a3b2f] dark:text-[#e7d7c4] py-10">
    <h2 class="text-2xl font-bold text-center mb-6 text-[#4a3b2f] dark:text-[#e7d7c4]">Why We Created EatEase</h2>
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Text Content -->
        <div class="text-center md:text-left">
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-8 leading-relaxed">
                At EatEase, we understand the challenge of choosing the perfect meal. It&apos;s a dilemma we&apos;ve all faced — standing in front of a menu, feeling overwhelmed by the countless options, unsure of what to pick, and wondering if it&apos;s the right choice. It&apos;s not just about satisfying hunger; it&apos;s about the joy of eating, the pleasure of discovering new flavors, and the delight of finding something that feels just right.
            </p>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-8 leading-relaxed">
                That&apos;s when we thought, &ldquo;What if we could make this process easier? What if we could save you those precious minutes and take away the guesswork?&rdquo; And so, EatEase was born. We envisioned a platform where every meal was tailored to your unique preferences, allergies, and even your past choices. No more wandering through endless menus, no more feeling confused about what to eat — just simple, personalized recommendations that suit your taste.
            </p>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc] leading-relaxed">
                EatEase isn&apos;t just about food; it&apos;s about making your dining experience smoother, faster, and more enjoyable. Whether you&apos;re craving something familiar or exploring new flavors, EatEase will guide you to the perfect meal, every time.
            </p>
        </div>
        <!-- Image Content -->
        <div class="flex justify-center">
            <img src="{{ asset('img/people.webp') }}" alt="Why We Created EatEase" class="rounded-lg shadow-md w-full max-w-md">
        </div>
    </div>
</div>

<!-- Why Choose Us Section -->
<div class="bg-[#ECE8D8] dark:bg-[#3d3025] py-10">
    <h2 class="text-2xl font-bold text-center mb-6 text-[#4a3b2f] dark:text-[#e7d7c4]">Why Choose Us</h2>
    <p class="text-center text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-10">We make dining easy and enjoyable.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6 md:px-16">
        <div class="bg-[#f7f4ef] dark:bg-[#2c2720] p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-2 text-[#4a3b2f] dark:text-[#e7d7c4]">Personalized Recommendations</h3>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc]">Our AI learns your tastes and suggests meals tailored to you.</p>
        </div>
        <div class="bg-[#f7f4ef] dark:bg-[#2c2720] p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-2 text-[#4a3b2f] dark:text-[#e7d7c4]">Time-Saving</h3>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc]">No more endless scrolling — find your ideal meal in seconds.</p>
        </div>
        <div class="bg-[#f7f4ef] dark:bg-[#2c2720] p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-2 text-[#4a3b2f] dark:text-[#e7d7c4]">Wide Variety</h3>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc]">From local favorites to international cuisines, explore it all.</p>
        </div>
    </div>
</div>


<!-- Frequently Asked Questions Section -->
<div class="bg-[#e7e3d8] dark:bg-[#1e1a14] py-10">
    <h2 class="text-2xl font-bold text-center mb-6 text-[#4a3b2f] dark:text-[#e7d7c4]">Frequently Asked Questions</h2>
    <div class="container mx-auto px-6 md:px-16 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Image Content -->
        <div class="flex justify-center">
            <img src="{{ asset('img/faq.webp') }}" alt="Frequently Asked Questions" class="rounded-lg shadow-md w-full max-w-md">
        </div>
        <!-- FAQ Content -->
        <div class="space-y-4">
            <div class="bg-[#f7f4ef] dark:bg-[#2c2720] p-4 rounded-lg shadow-md">
                <button class="w-full text-left text-[#4a3b2f] dark:text-[#e7d7c4] font-semibold flex items-center justify-between" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180');">
                    What is EatEase?
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 transition-transform duration-200">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div class="hidden mt-2 text-sm text-[#4a3b2f] dark:text-[#d7d4cc]">
                    EatEase is a platform that provides personalized meal recommendations based on your preferences and allergies.
                </div>
            </div>
            <div class="bg-[#f7f4ef] dark:bg-[#2c2720] p-4 rounded-lg shadow-md">
                <button class="w-full text-left text-[#4a3b2f] dark:text-[#e7d7c4] font-semibold flex items-center justify-between" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180');">
                    How does EatEase work?
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 transition-transform duration-200">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div class="hidden mt-2 text-sm text-[#4a3b2f] dark:text-[#d7d4cc]">
                    Our AI analyzes your past orders, preferences, and allergies to suggest meals you&apos;ll love.
                </div>
            </div>
            <div class="bg-[#f7f4ef] dark:bg-[#2c2720] p-4 rounded-lg shadow-md">
                <button class="w-full text-left text-[#4a3b2f] dark:text-[#e7d7c4] font-semibold flex items-center justify-between" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-180');">
                    Is EatEase free to use?
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 transition-transform duration-200">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div class="hidden mt-2 text-sm text-[#4a3b2f] dark:text-[#d7d4cc]">
                    Yes, EatEase is completely free to use for discovering personalized meal recommendations.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
