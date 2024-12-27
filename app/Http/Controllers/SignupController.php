<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        // Menampilkan view form signup
        return view('auth.signup'); // Pastikan file signup.blade.php ada di folder resources/views/
    }

    public function store(Request $request)
    {
        // Validasi input yang diterima
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:user,email',
            'preferensi' => 'nullable|string|in:normal,vege/vegan', // Hanya menerima pilihan 'normal' atau 'vege/vegan'
            'alergi' => 'nullable|string|in:none,seafood,peanut,tofu,milk,hazelnut', // Pilihan alergi yang valid
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Menyimpan user baru dengan data yang valid
        $user = User::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'preferensi' => $validated['preferensi'],
            'alergi' => $validated['alergi'],
            'password' => bcrypt($validated['password']),
        ]);

        // Redirect atau beri pesan sukses
        return redirect()->route('user.login')->with('success', 'Account created successfully!');
    }
}