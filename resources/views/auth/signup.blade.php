@extends('base.base2')

@section('title', 'Sign Up | EatEase')

@section('content')
<div class="relative min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('img/signup.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-30"></div>

    <div class="relative p-8 w-full max-w-md text-center bg-white bg-opacity-80 rounded-lg shadow-2xl backdrop-blur-md border border-[#D6C1AC]">
        <h2 class="text-2xl font-bold mb-4 text-[#4A3628]">Create Your Account</h2>

        <!-- Sign-Up Form -->
        <form action="{{ route('auth.signup.store') }}" method="POST" class="space-y-4">
            @csrf
            <!-- Nama -->
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#4A3628]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 12c2.485 0 4.5-2.015 4.5-4.5S14.485 3 12 3 7.5 5.015 7.5 7.5 9.515 12 12 12zM6.75 21h10.5c.746 0 1.38-.428 1.648-1.05-1.2-1.829-3.56-3.2-6.398-3.2s-5.198 1.371-6.398 3.2c.268.622.902 1.05 1.648 1.05z"/>
                    </svg>
                </span>
                <input type="text" name="nama" id="nama" placeholder="Name" 
                       class="w-full bg-[#F6EFE5] border border-[#C8B8A7] text-[#4A3628] rounded-lg py-3 px-10 placeholder-[#8C6E5D] focus:outline-none focus:ring-2 focus:ring-[#B0896C] shadow-sm"
                       required>
            </div>

            <!-- Email -->
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#4A3628]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
                    </svg>
                </span>
                <input type="email" name="email" id="email" placeholder="Email" 
                       class="w-full bg-[#F6EFE5] border border-[#C8B8A7] text-[#4A3628] rounded-lg py-3 px-10 placeholder-[#8C6E5D] focus:outline-none focus:ring-2 focus:ring-[#B0896C] shadow-sm"
                       required>
            </div>

            <!-- Preferensi -->
            <div class="relative">
                <!-- SVG Icon -->
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#4A3628]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                    </svg>
                </span>

                <!-- Select Input -->
                <select name="preferensi" id="preferensi" 
                        class="w-full bg-[#F6EFE5] border border-[#C8B8A7] text-[#4A3628] rounded-lg py-3 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-[#B0896C] shadow-sm">
                    <option value="" disabled selected class="text-[#8C6E5D]">Select Preference</option>
                    <option value="normal" class="text-[#4A3628]">Normal</option>
                    <option value="vege/vegan" class="text-[#4A3628]">Vege/Vegan</option>
                    <option value="spicy" class="text-[#4A3628]">Spicy</option>
                    <option value="dessert" class="text-[#4A3628]">Dessert</option>
                </select>
            </div>

            <!-- Alergi -->
            <div class="relative">
                <!-- SVG Icon -->
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#4A3628]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                    </svg>
                </span>

                <!-- Select Input -->
                <select name="alergi" id="alergi" 
                        class="w-full bg-[#F6EFE5] border border-[#C8B8A7] text-[#4A3628] rounded-lg py-3 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-[#B0896C] shadow-sm">
                    <option value="" disabled selected class="text-[#8C6E5D]">Select Allergies</option>
                    <option value="none" class="text-[#4A3628]">None</option>
                    <option value="seafood" class="text-[#4A3628]">Seafood</option>
                    <option value="peanut" class="text-[#4A3628]">Peanut</option>
                    <option value="tofu" class="text-[#4A3628]">Tofu</option>
                    <option value="milk" class="text-[#4A3628]">Milk</option>
                    <option value="hazelnut" class="text-[#4A3628]">Hazelnut</option>
                </select>
            </div>

            <!-- Password -->
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#4A3628]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/>
                    </svg>
                </span>
                <input type="password" name="password" id="password" placeholder="Password" 
                       class="w-full bg-[#F6EFE5] border border-[#C8B8A7] text-[#4A3628] rounded-lg py-3 px-10 placeholder-[#8C6E5D] focus:outline-none focus:ring-2 focus:ring-[#B0896C] shadow-sm"
                       required>
            </div>

            <!-- Confirm Password -->
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#4A3628]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/>
                    </svg>
                </span>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" 
                       class="w-full bg-[#F6EFE5] border border-[#C8B8A7] text-[#4A3628] rounded-lg py-3 px-10 placeholder-[#8C6E5D] focus:outline-none focus:ring-2 focus:ring-[#B0896C] shadow-sm"
                       required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-[#A17C57] text-white rounded-lg py-3 shadow-md hover:bg-[#8C6745] transition-all duration-300">
                Sign Up
            </button>


            <p class="text-[#4A3628] mt-4">
                Already have an account?
                <a href="{{ route('login') }}" style="color: #A17C57; text-decoration: underline;">Login</a>
            </p>
        </form>
    </div>

    @if($errors->any())
        <script>
            Swal.fire({
                title: 'Oops!',
                text: '@foreach ($errors->all() as $error) {{ $error }} @endforeach',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
</div>
@endsection
