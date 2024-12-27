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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:user,admin', // Validasi role
        ]);

        $credentials = $request->only('email', 'password');
        $role = $request->role;

        if ($role === 'user') {
            // Autentikasi dari tabel `user`
            $user = \DB::table('user')->where('email', $request->email)->first();

            if ($user && \Hash::check($request->password, $user->password)) {
                // Simpan sesi atau arahkan ke dashboard user
                session(['user' => $user]);
                return redirect()->route('user.dashboard');
            }
        } elseif ($role === 'admin') {
            // Autentikasi dari tabel `admin`
            $admin = \DB::table('admin')->where('email', $request->email)->first();

            if ($admin && \Hash::check($request->password, $admin->password)) {
                // Simpan sesi atau arahkan ke dashboard admin
                session(['admin' => $admin]);
                return redirect()->route('admin.dashboard');
            }
        }

        // Jika autentikasi gagal
        return back()->withErrors(['error' => 'Invalid credentials or role.']);
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
