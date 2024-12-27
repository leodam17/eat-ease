@extends('base.base')

@section('title', 'EatEase | About Us')

@section('content')
<div class="bg-[#e7e3d8] dark:bg-[#1e1a14] text-[#4a3b2f] dark:text-[#e7d7c4] py-20 mt-20">
    <div class="container mx-auto px-4 flex items-center">
        <!-- Left Side Image -->
        <div class="w-full md:w-1/2 mb-6 md:mb-0">
            <img src="{{ asset('img/about.jpg') }}" alt="About Us Image" class="w-full h-auto max-w-[500px] rounded-lg shadow-lg object-cover">
        </div>

        <!-- Right Side Text -->
        <div class="w-full md:w-1/2 text-center md:text-left">
            <h2 class="text-4xl font-bold mb-6">Why We Created EatEase</h2>
            <p class="text-lg italic mb-4">EatEase - More Than Just Food</p>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-8 leading-relaxed">
                At EatEase, we understand the challenge of choosing the perfect meal. It&apos;s a dilemma we&apos;ve all faced — standing in front of a menu, feeling overwhelmed by the countless options, unsure of what to pick, and wondering if it&apos;s the right choice. It&apos;s not just about satisfying hunger; it&apos;s about the joy of eating, the pleasure of discovering new flavors, and the delight of finding something that feels just right.
            </p>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-8 leading-relaxed">
                That&apos;s when we thought, &ldquo;What if we could make this process easier? What if we could save you those precious minutes and take away the guesswork?&rdquo; And so, EatEase was born. We envisioned a platform where every meal was tailored to your unique preferences, allergies, and even your past choices. No more wandering through endless menus, no more feeling confused about what to eat — just simple, personalized recommendations that suit your taste.
            </p>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-8 leading-relaxed">
                EatEase isn&apos;t just about food; it&apos;s about making your dining experience smoother, faster, and more enjoyable. Whether you&apos;re craving something familiar or exploring new flavors, EatEase will guide you to the perfect meal, every time. So, why wait? Come and join us on this flavorful journey. Let us help you rediscover the joy of eating, one bite at a time. Because the best meals are just a click away, and they&apos;re waiting for you here at EatEase.
            </p>
            <a href="{{ route('about') }}" class="bg-[#d6a670] text-white py-3 px-6 rounded-md shadow-md hover:bg-[#bf8f5a] dark:bg-[#a77e4a] dark:text-white dark:hover:bg-[#8f6c45] transition">
                Back to Home
            </a>
        </div>
    </div>
</div>
@endsection
