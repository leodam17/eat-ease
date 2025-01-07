<?php

namespace App\Http\Controllers;

use App\Models\Users; // Make sure the Users model is used
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    /**
     * Display the signup page for the user.
     */
    public function index()
    {
        return view('auth.signup'); // Ensure this blade file exists at resources/views/user/signup.blade.php
    }

    /**
     * Process the registration of a new user.
     */
    public function signup(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', // Pastikan email unik di tabel users
            'password' => 'required|string|min:6|confirmed', // Pastikan password dikonfirmasi
            'preferensi' => 'nullable|string|in:normal,vegan,spicy,dessert', // Validasi preferensi
            'alergi' => 'nullable|string|in:none,seafood,peanut,tofu,milk,hazelnut',
        ], [
            'nama.required' => 'Full name is required.',
            'nama.string' => 'Full name must be a string.',
            'nama.max' => 'Full name must not exceed 255 characters.',
            
            'email.required' => 'Email is required.',
            'email.email' => 'The email you entered is not valid.',
            'email.unique' => 'This email is already registered. Please use another email.',
            
            'password.required' => 'Password is required.',
            'password.string' => 'Password must be a string.',
            'password.min' => 'Password must be at least 6 characters.',
            'password.confirmed' => 'Password confirmation does not match.',
        ]);

        // Membuat user baru
        Users::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encrypt password
            'preferensi' => $request->preferensi, // Save preferensi
            'alergi' => $request->alergi,
        ]);

        return redirect()->route('login')->with('success', 'Yay! Your account has been created.');
    }
}
