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
        $credentials = $request->only('email', 'password');

        // Login as admin/user
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.dashboard')->with('success', 'Welcome back! You have successfully logged in.');
        }

        $user = Users::where('email', $request->email)->first();
        if ($user && \Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('user.home')->with('success', 'Welcome back! You have successfully logged in.');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('logout.page');
    }

    public function logout_page()
    {
        return view('auth.logout');
    }
}
