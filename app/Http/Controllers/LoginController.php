<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminHomeController;
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
