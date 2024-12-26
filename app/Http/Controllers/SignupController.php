<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('auth.signup'); // View untuk halaman signup
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:dns|unique:admin,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan data admin ke database
        Admin::create([
            'nama' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully. Please login.');
    }
}
