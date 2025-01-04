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
    <div class="container mx-auto px-4 text-center md:text-left">
        <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-8 leading-relaxed">
            At EatEase, we understand the challenge of choosing the perfect meal. It&apos;s a dilemma we&apos;ve all faced — standing in front of a menu, feeling overwhelmed by the countless options, unsure of what to pick, and wondering if it&apos;s the right choice. It&apos;s not just about satisfying hunger; it&apos;s about the joy of eating, the pleasure of discovering new flavors, and the delight of finding something that feels just right.
        </p>
        <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-8 leading-relaxed">
            That&apos;s when we thought, &ldquo;What if we could make this process easier? What if we could save you those precious minutes and take away the guesswork?&rdquo; And so, EatEase was born. We envisioned a platform where every meal was tailored to your unique preferences, allergies, and even your past choices. No more wandering through endless menus, no more feeling confused about what to eat — just simple, personalized recommendations that suit your taste.
        </p>
        <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc] leading-relaxed">
            EatEase isn&apos;t just about food; it&apos;s about making your dining experience smoother, faster, and more enjoyable. Whether you&apos;re craving something familiar or exploring new flavors, EatEase will guide you to the perfect meal, every time. So, why wait? Come and join us on this flavorful journey. Let us help you rediscover the joy of eating, one bite at a time. Because the best meals are just a click away, and they&apos;re waiting for you here at EatEase.
        </p>
    </div>
</div>
@endsection
