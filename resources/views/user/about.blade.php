@extends('base.base')

@section('title', 'EatEase | About Us')

@section('content')
<!-- Header -->
<div class="relative w-full h-[300px] bg-cover bg-center" style="background-image: url('{{ asset('img/about.webp') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center">
        <div class="text-white text-sm mb-4">
            <a href="/home" class="hover:underline">Home</a>
            <span class="mx-2">></span>
            <span>About</span>
        </div>
        <h1 class="text-4xl font-bold text-white">Our Story</h1>
    </div>
</div>


<!-- Why We Created EatEase -->
<div class="bg-[#e7e3d8] dark:bg-[#1e1a14] text-[#4a3b2f] dark:text-[#e7d7c4] py-10">
    <h2 class="text-2xl font-bold text-center mb-6 text-[#4a3b2f] dark:text-[#e7d7c4]">Why We Created EatEase</h2>

    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
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
        <div class="flex justify-center">
            <img src="{{ asset('img/people.webp') }}" alt="Why We Created EatEase" class="rounded-lg shadow-md w-full max-w-md">
        </div>
    </div>
</div>


<!-- Why Choose Us -->
<div class="bg-[#ECE8D8] dark:bg-[#3d3025] py-10">
    <h2 class="text-2xl font-bold text-center mb-6 text-[#4a3b2f] dark:text-[#e7d7c4]">Why Choose Us</h2>
    <p class="text-center text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-10">We make dining easy and enjoyable.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6 md:px-16">
        <div class="bg-[#f7f4ef] dark:bg-[#2c2720] p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-[#4a3b2f] dark:text-[#e7d7c4] mr-2">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 0 0-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634Zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 0 1-.189-.866c0-.298.059-.605.189-.866Zm2.023 6.828a.75.75 0 1 0-1.06-1.06 3.75 3.75 0 0 1-5.304 0 .75.75 0 0 0-1.06 1.06 5.25 5.25 0 0 0 7.424 0Z" clip-rule="evenodd" />
                </svg>
                <h3 class="text-lg font-semibold text-[#4a3b2f] dark:text-[#e7d7c4]">Personalized Recommendations</h3>
            </div>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc]">Our AI learns your tastes and suggests meals tailored to you.</p>
        </div>
        <div class="bg-[#f7f4ef] dark:bg-[#2c2720] p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-[#4a3b2f] dark:text-[#e7d7c4] mr-2">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                </svg>
                <h3 class="text-lg font-semibold text-[#4a3b2f] dark:text-[#e7d7c4]">Time-Saving</h3>
            </div>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc]">No more endless scrolling — find your ideal meal in seconds.</p>
        </div>
        <div class="bg-[#f7f4ef] dark:bg-[#2c2720] p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-[#4a3b2f] dark:text-[#e7d7c4] mr-2">
                    <path d="M15.75 8.25a.75.75 0 0 1 .75.75c0 1.12-.492 2.126-1.27 2.812a.75.75 0 1 1-.992-1.124A2.243 2.243 0 0 0 15 9a.75.75 0 0 1 .75-.75Z" />
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM4.575 15.6a8.25 8.25 0 0 0 9.348 4.425 1.966 1.966 0 0 0-1.84-1.275.983.983 0 0 1-.97-.822l-.073-.437c-.094-.565.25-1.11.8-1.267l.99-.282c.427-.123.783-.418.982-.816l.036-.073a1.453 1.453 0 0 1 2.328-.377L16.5 15h.628a2.25 2.25 0 0 1 1.983 1.186 8.25 8.25 0 0 0-6.345-12.4c.044.262.18.503.389.676l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.575 15.6Z" clip-rule="evenodd" />
                </svg>
                <h3 class="text-lg font-semibold text-[#4a3b2f] dark:text-[#e7d7c4]">Wide Variety</h3>
            </div>
            <p class="text-sm text-[#4a3b2f] dark:text-[#d7d4cc]">From local favorites to international cuisines, explore it all.</p>
        </div>
    </div>
</div>


<!-- Frequently Ask Questions -->
<div class="bg-[#e7e3d8] dark:bg-[#1e1a14] py-10">
    <h2 class="text-2xl font-bold text-center mb-6 text-[#4a3b2f] dark:text-[#e7d7c4]">Frequently Asked Questions</h2>

    <div class="container mx-auto px-6 md:px-16 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="flex justify-center">
            <img src="{{ asset('img/faq.webp') }}" alt="Frequently Asked Questions" class="rounded-lg shadow-md w-full max-w-md">
        </div>
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
                    Can I track my order history?
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 transition-transform duration-200">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div class="hidden mt-2 text-sm text-[#4a3b2f] dark:text-[#d7d4cc]">
                    Yes, you can view your past orders, making it easier to reorder your favorite meals.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
