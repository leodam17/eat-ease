<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Admin;
use App\Models\Users; 

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function login_auth(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
    
        // Login sebagai admin
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.home');
        }
    
        // Login sebagai user
        if (Auth::guard('web')->attempt($request->only('email', 'password'))) {
            return redirect()->route('user.home');
        }

        return back()->with('error', 'Invalid credentials');
    }


    public function logout(Request $request)
    {
        // Logout user
        Auth::logout();

        // Invalidate session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        // Redirect ke halaman login atau logout
        return redirect()->route('/login')->with('success', 'Logged out successfully!');
    }

}
