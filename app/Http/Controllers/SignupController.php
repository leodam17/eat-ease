<?php

namespace App\Http\Controllers;

use App\Models\Users; // Pastikan model Users digunakan
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    /**
     * Menampilkan halaman signup untuk pengguna.
     */
    public function index()
    {
        return view('user.signup'); // Pastikan file blade ini ada di resources/views/user/signup.blade.php
    }

    /**
     * Proses pendaftaran pengguna baru.
     */
    public function signup(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', // Pastikan email unik di tabel users
            'password' => 'required|string|min:6|confirmed', // Pastikan password dikonfirmasi
            'preferensi' => 'nullable|string|in:normal,vege/vegan', // Validasi preferensi
            'alergi' => 'nullable|string|in:none,seafood,peanut,tofu,milk,hazelnut',
        ]);

        // Buat pengguna baru
        Users::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
            'preferensi' => $request->preferensi, // Simpan preferensi
            'alergi' => $request->alergi,
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Signup successful! Please log in.');
    }
}
