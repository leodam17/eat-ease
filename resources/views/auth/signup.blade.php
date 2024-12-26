@extends('base.base')

@section('title', 'Sign Up | EatEase')

@section('content')
<div class="relative min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('img/signup_admin.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-30"></div>

    <div class="relative p-10 w-full max-w-md text-center mt-10">
        <h2 class="text-3xl font-bold mb-4 text-white">Create Your Account</h2>

        <!-- Confirmation Message -->
        @if(session('success'))
            <div id="success-alert" class="fixed top-0 left-0 right-0 mx-auto mt-4 w-1/3 bg-green-600 text-white border border-green-700 px-4 py-3 rounded shadow-md z-50 text-center" style="max-width: 90%;" role="alert">
                <div class="flex justify-between items-center">
                    <span>{{ session('success') }}</span>
                    <button onclick="document.getElementById('success-alert').style.display='none'" class="text-white hover:text-green-200 font-bold ml-4">
                        &times;
                    </button>
                </div>
            </div>
        @endif

        <!-- Sign-Up Form -->
        <form action="{{ route('signup.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-white">
                    <!-- Icon Name -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 12c2.485 0 4.5-2.015 4.5-4.5S14.485 3 12 3 7.5 5.015 7.5 7.5 9.515 12 12 12zM6.75 21h10.5c.746 0 1.38-.428 1.648-1.05-1.2-1.829-3.56-3.2-6.398-3.2s-5.198 1.371-6.398 3.2c.268.622.902 1.05 1.648 1.05z"/>
                    </svg>
                </span>
                <input type="text" name="name" id="name" placeholder="Name" 
                       class="w-full bg-white bg-opacity-15 text-white border-none rounded-full py-3 px-10 placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-300 shadow-lg"
                       style="font-size: 1.1rem;" required>
            </div>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-white">
                    <!-- Icon Email -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
                    </svg>
                </span>
                <input type="email" name="email" id="email" placeholder="Email" 
                       class="w-full bg-white bg-opacity-15 text-white border-none rounded-full py-3 px-10 placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-300 shadow-lg"
                       style="font-size: 1.1rem;" required>
            </div>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-white">
                    <!-- Icon Password -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/>
                    </svg>
                </span>
                <input type="password" name="password" id="password" placeholder="Password" 
                       class="w-full bg-white bg-opacity-15 text-white border-none rounded-full py-3 px-10 placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-300 shadow-lg"
                       style="font-size: 1.1rem;" required>
            </div>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-white">
                    <!-- Icon Confirm Password -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/>
                    </svg>
                </span>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" 
                       class="w-full bg-white bg-opacity-15 text-white border-none rounded-full py-3 px-10 placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-300 shadow-lg"
                       style="font-size: 1.1rem;" required>
            </div>
            <button type="submit" class="glow-button w-full">
                Sign Up
            </button>
            <p class="text-gray-600 mt-4">
                Already have an account?
                <a href="{{ route('login') }}" class="text-orange-500 hover:underline">Login</a>
            </p>
        </form>
    </div>
</div>

@vite('resources/css/login.css')
@endsection
