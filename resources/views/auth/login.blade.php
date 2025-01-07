@extends('base.base2')

@section('title', 'Login | EatEase')

@section('content')
<div class="min-h-screen flex items-center justify-center" 
     style="background: url('img/login.webp') no-repeat center center fixed; background-size: cover;">
    <div class="w-full max-w-md p-8 rounded-xl shadow-lg relative" 
         style="background: rgba(255, 245, 230, 0.9); backdrop-filter: blur(8px); border: 1px solid #E7D8C6;">
        <h2 class="text-2xl font-bold text-center mb-4" style="color: #815854;">Welcome Back</h2>
        <p class="text-center mb-6" style="color: #A18979;">Just a few details and you&apos;re in!</p>

        <form id="login-form" action="{{ route('login_post') }}" method="POST" class="space-y-4">
            @csrf
            <div class="relative flex items-center">
                <!-- Icon Email -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6 absolute left-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <input type="text" name="email" id="email" placeholder="Email"
                       class="w-full border rounded-lg py-3 px-12 focus:outline-none focus:ring-2"
                       style="background-color: #FFF7EC; border: 1px solid #D3BAA4; color: #6F4E37; transition: all 0.3s ease;" required>
            </div>

            <div class="relative flex items-center">
                <!-- Icon Password -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 absolute left-3" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/>
                </svg>
                <input type="password" name="password" id="password" placeholder="Password"
                       class="w-full border rounded-lg py-3 px-12 focus:outline-none focus:ring-2"
                       style="background-color: #FFF7EC; border: 1px solid #D3BAA4; color: #6F4E37; transition: all 0.3s ease;" required>
            </div>

            <div class="relative flex items-center">
                <!-- Icon Role -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 absolute left-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 12c2.485 0 4.5-2.015 4.5-4.5S14.485 3 12 3 7.5 5.015 7.5 7.5 9.515 12 12 12zM6.75 21h10.5c.746 0 1.38-.428 1.648-1.05-1.2-1.829-3.56-3.2-6.398-3.2s-5.198 1.371-6.398 3.2c.268.622.902 1.05 1.648 1.05z"/>
                </svg>
                <select name="role" id="role" 
                        class="w-full border rounded-lg py-3 px-12 focus:outline-none focus:ring-2"
                        style="background-color: #FFF7EC; border: 1px solid #D3BAA4; color: #6F4E37; transition: all 0.3s ease;" required>
                    <option value="" disabled selected>Select Role</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit" 
                    class="w-full py-3 rounded-lg font-semibold bg-[#A0643C] text-white hover:bg-[#8C4F30] transition-all duration-300">
                Login
            </button>

            <p class="text-center mt-4" style="color: #815854;">
                New to EatEase? 
                <a href="{{ route('auth.signup') }}" style="color: #A0643C; text-decoration: underline;">Register here!</a>
            </p>
        </form>
    </div>
</div>

<script>
    document.getElementById('login-form').addEventListener('submit', function (e) {
        const role = document.getElementById('role').value;
        if (!role) {
            e.preventDefault();
            alert('Please select a role before logging in.');
        }
    });
</script>
@endsection
