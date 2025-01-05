<!-- Navbar -->
<header class="bg-cyan-600 text-white shadow-md p-4 flex justify-between items-center">
    <div class="flex items-center space-x-4">
        <!-- Tombol Hamburger untuk HP -->
        <button id="sidebarToggle" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        <div class="flex items-center">
            {{-- <img src="{{ asset('images/events/backend-eventger.png') }}" alt="Eventger Logo" class="h-8 w-8"> --}}
            <div class="flex items-center text-white">
                <span class="text-xl font-bold">EatEase</span>
                <div class="border-l border-white-500 h-6 mx-3"></div>
                <span class="text-white-400 font-normal">
                    Welcome,
                </span>
            </div>
        </div>
    </div>
{{-- 
    <div>
        <a href="{{ route('admin.profile') }}"
            class="px-4 py-2 text-white hover:underline
        @if ($menu == 'profile') font-semibold  bg-cyan-700 @endif
        ">Profile</a>
        <a href="{{ route('logout') }}" class="px-4 py-2 text-white hover:underline">Logout</a>
    </div> --}}
</header>
