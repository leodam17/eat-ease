@extends('base.base')

@section('title', 'Login | EatEase')

@section('content')
<div class="relative min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('img/login.webp') }}');">
    <div class="absolute inset-0 bg-black opacity-30"></div>

    <div class="relative p-10 w-full max-w-md text-center mt-[-6%]">
        <h2 class="text-3xl font-bold mb-4 text-white">Welcome Back</h2>

        <!-- pesan error apabila email dan password salah -->
        @if($errors->has('error'))
            <div id="error-alert" class="fixed top-0 left-0 right-0 mx-auto mt-4 w-1/3 bg-red-600 text-white border border-red-700 px-4 py-3 rounded shadow-md z-50 text-center" style="max-width: 90%;" role="alert">
                <div class="flex justify-between items-center">
                    <span>{{ $errors->first('error') }}</span>
                    <button onclick="document.getElementById('error-alert').style.display='none'" class="text-white hover:text-red-200 font-bold ml-4">
                        &times;
                    </button>
                </div>
            </div>
        @endif

        <form action="{{ route('login_post') }}" method="POST" class="space-y-6">
            @csrf
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-white">
                    <!-- icon email -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
                    </svg>
                </span>
                <input type="text" name="email" id="email" placeholder="Email" 
                       class="w-full bg-white bg-opacity-15 text-white border-none rounded-full py-3 px-10 placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-300 shadow-lg"
                       style="font-size: 1.1rem;" required>
                @error('email')
                    <div class="border border-red-500 text-red-500 text-xs italic ">{{ $message }}</div>
                @enderror
            </div>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-white">
                <!-- icon password -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/>
                    </svg>
                </span>
                <input type="password" name="password" id="password" placeholder="Password" 
                       class="w-full bg-white bg-opacity-15 text-white border-none rounded-full py-3 px-10 placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-300 shadow-lg"
                       style="font-size: 1.1rem;" required>
            </div>
            <button type="submit" class="glow-button w-full">
                Login
            </button>
        </form>
    </div>
</div>

@vite('resources/css/login.css')
@endsection  
