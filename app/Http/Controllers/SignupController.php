<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{

    public function index()
    {
        return view('user.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|unique:admins,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:user,admin',
        ]);

        if ($request->role === 'admin') {
            // Buat admin baru
            Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('admin.login');
        } elseif ($request->role === 'user') {
            // Buat user baru
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('login');
        }

        return back()->withErrors(['role' => 'Invalid role.']);
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        // Simpan pengguna baru
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        return redirect()->route('login')->with('success', 'Signup successful!');
    }
}
