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
        $credentials = $request->only('email', 'password');

        // Periksa apakah admin atau user
        $admin = Admin::where('email', $request->email)->first();
        if ($admin && \Hash::check($request->password, $admin->password)) {
            Auth::login($admin);
            return redirect()->route('admin.home');
        }

        $user = Users::where('email', $request->email)->first();
        if ($user && \Hash::check($request->password, $user->password)) {
            Auth::login($user);
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
