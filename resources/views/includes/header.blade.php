<style>
/* Container Toggle */
.toggle-container {
    display: flex;
    align-items: center;
    position: relative;
    width: 60px; /* Lebar toggle */
    height: 30px; /* Tinggi toggle */
    background-color: #d2c3af; /* Warna background default */
    border-radius: 15px; /* Membulat */
    cursor: pointer;
    transition: background-color 0.3s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

/* Posisi tombol toggle */
#theme-icon {
    position: absolute;
    width: 26px;
    height: 26px;
    background-color: white; /* Warna tombol */
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease, background-color 0.3s ease;
    left: 2px; /* Posisi awal (light mode) */
}

/* Background toggle saat dark mode */
.toggle-container.dark {
    background-color: #5c5043; /* Warna toggle saat dark mode */
}

/* Posisi tombol saat dark mode */
.toggle-container.dark #theme-icon {
    transform: translateX(30px); /* Geser ke kanan */
}

/* Ikon SVG */
.toggle-icon svg {
    width: 16px;
    height: 16px;
    fill: #5c5043; /* Warna ikon untuk light mode */
    transition: fill 0.3s ease;
}

/* Dark mode ikon warna */
.toggle-container.dark .toggle-icon svg {
    fill: #d2c3af; /* Warna ikon untuk dark mode */
}

/* Posisi tombol toggle */
#mobile-theme-icon {
    position: absolute;
    width: 26px;
    height: 26px;
    background-color: white; /* Warna tombol */
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease, background-color 0.3s ease;
    left: 2px; /* Posisi awal (light mode) */
}

/* Posisi tombol saat dark mode */
.toggle-container.dark #theme-icon,
.toggle-container.dark #mobile-theme-icon {
    transform: translateX(30px); /* Geser ke kanan */
}

</style>


<nav id="navbar" class="fixed top-0 left-0 right-0 z-10 transition-colors duration-300 font-poppins">
    <div class="container mx-auto px-4 flex justify-between items-center h-20">
        <!-- Title -->
        <a id="navbar-title" href="{{ route('home') }}" class="text-3xl font-bold text-white transition-colors duration-300">EatEase</a>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" type="button" class="text-black dark:text-white hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white md:hidden">
            <span class="sr-only">Open Menu</span>

            <svg id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-black dark:text-white hover:text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

            <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden h-6 w-6 text-black dark:text-white hover:text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Navigation Links (Desktop) -->
        <div class="hidden md:flex items-center space-x-6">
            <a href="{{ route('home') }}" 
               class="text-sm font-semibold leading-6 text-white hover:underline transition duration-300 {{ request()->is('home') ? 'underline' : '' }}">
                Home
            </a>
            <a href="{{ route('about') }}" 
               class="text-sm font-semibold leading-6 text-white hover:underline transition duration-300 {{ request()->is('about') ? 'underline' : '' }}">
                About
            </a>
            <a href="{{ route('menu') }}" 
               class="text-sm font-semibold leading-6 text-white hover:underline transition duration-300 {{ request()->is('menu') ? 'underline' : '' }}">
                Menu
            </a>
            <a href="{{ route('user.cart') }}" 
                class="text-sm font-semibold leading-6 text-white transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                    </svg>
                </a>

            <!-- Theme Toggle -->
            <div id="theme-toggle" class="toggle-container">
                <span id="theme-icon"></span>
            </div>

            <!-- Logout Button -->
            @auth
            <form action="{{ route('login') }}" method="POST" class="inline">
                @csrf
                <button 
                    type="submit" 
                    id="logout-button"
                    class="text-sm font-semibold leading-6 text-white border border-white rounded px-3 py-1 
                    hover:bg-[#d6c2ac] hover:text-[#4a3b2f] dark:hover:bg-[#5a4837] dark:hover:text-[#e7d7c4] transition duration-300">
                    Logout
                </button>
            </form>
            @endauth
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden absolute top-20 left-0 right-0 bg-white shadow-lg">
        <!-- Menu Links -->
        <div class="flex flex-col items-start">
            <a href="{{ route('home') }}" 
            class="block w-full px-4 py-2 text-sm font-semibold leading-6">
                Home
            </a>
            <a href="{{ route('about') }}" 
            class="block w-full px-4 py-2 text-sm font-semibold leading-6">
                About
            </a>
            <a href="{{ route('menu') }}" 
            class="block w-full px-4 py-2 text-sm font-semibold leading-6">
                Menu
            </a>
        </div>

        <!-- Cart Icon -->
        <div class="flex items-center px-4 py-2">
            <a href="{{ route('user.cart') }}" 
                class="text-sm font-semibold leading-6 transition duration-300 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                </svg>
            </a>
        </div>

        <!-- Theme Toggle untuk Mobile -->
        <div id="mobile-theme-toggle" 
            class="toggle-container" 
            style="margin-left: 13px; margin-bottom: 10px;">
            <span id="mobile-theme-icon"></span>
        </div>
    </div>


    <!-- Logout Button -->
    @auth
    <div class="flex items-center px-4 py-2">
        <form action="{{ route('login') }}" method="POST" class="w-full">
            @csrf
            <button 
                type="submit" 
                id="logout-button"
                class="w-full text-sm font-semibold leading-6 text-black dark:text-white border border-black dark:border-white rounded px-3 py-1 
                hover:bg-gray-200 dark:hover:bg-gray-700 transition duration-300">
                Logout
            </button>
        </form>
    </div>
    @endauth
</div>

</nav>



<script>
    function applyNavbarTheme() {
        const navbar = document.getElementById('navbar');
        const navbarTitle = document.getElementById('navbar-title');
        const navLinks = document.querySelectorAll('#navbar a'); // Semua tautan navigasi
        const themeToggle = document.getElementById('theme-toggle');
        const logoutButton = document.getElementById('logout-button');

        // Hapus kelas tema sebelumnya
        navbar.classList.remove('bg-[#4a3b2f]', 'bg-[#e7d7c4]');

        // Periksa apakah mode dark aktif
        if (document.documentElement.classList.contains('dark')) {
            // Tema dark
            navbar.classList.add('bg-[#4a3b2f]');
            navbarTitle.style.color = '#e7d7c4';
            navLinks.forEach(link => (link.style.color = '#e7d7c4')); // Sesuaikan warna tautan
            themeToggle.style.color = '#e7d7c4';
            logoutButton.style.color = '#e7d7c4';
            logoutButton.style.borderColor = '#e7d7c4';
        } else {
            // Tema light
            navbar.classList.add('bg-[#e7d7c4]');
            navbarTitle.style.color = '#4a3b2f';
            navLinks.forEach(link => (link.style.color = '#4a3b2f')); // Sesuaikan warna tautan
            themeToggle.style.color = '#4a3b2f';
            logoutButton.style.color = '#4a3b2f';
            logoutButton.style.borderColor = '#4a3b2f';
        }
    }

    function toggleTheme() {
        // Toggle class pada elemen <html> untuk mode dark
        document.documentElement.classList.toggle('dark');
        // Terapkan tema setelah toggle
        applyNavbarTheme();
    }

    // Pasang event listener untuk inisialisasi dan toggle
    document.addEventListener('DOMContentLoaded', () => {
        applyNavbarTheme();
        document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
    });
</script>