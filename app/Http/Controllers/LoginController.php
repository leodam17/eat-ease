<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function login_auth(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'role' => 'required|in:admin,user', // Pastikan role yang dipilih valid
        ]);

        // Cek apakah ada user dengan email yang diberikan dan apakah role sesuai
        $user = User::where('email', $validated['email'])->first();

        if ($user && Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            // Cek role pengguna
            if ($user->role === $validated['role']) {
                // Login berhasil, arahkan ke halaman yang sesuai
                return redirect()->route($user->role . '.home'); // Sesuaikan rute dengan role
            } else {
                // Jika role tidak cocok, logout dan beri pesan kesalahan
                Auth::logout();
                return redirect()->route('login')->with('error', 'Role tidak sesuai!');
            }
        }

        // Jika login gagal
        return redirect()->route('login')->with('error', 'Email atau password salah!');
    }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        

        return redirect()->route('logout.page');
    }


    public function logout_page()
    {
        return view('admin.logout');
    }
}
