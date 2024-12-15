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
        $credentials = $request->validate([
            'email' =>'required|email:dns',
            'password'=> 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->route('movies');
        }

        return back()->withErrors([
            'error' => 'Email and password do not match!',
        ]);
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
