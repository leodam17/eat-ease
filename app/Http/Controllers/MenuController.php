<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    public function menu(Request $request) {
        $query = Menu::query();

        // Search
        if ($request->has('search') && !empty($request->search)) {
            $query->where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('deskripsi', 'like', '%' . $request->search . '%');
        }

        // Filter
        if ($request->has('kategori') && !empty($request->kategori)) {
            $query->where('kategori', $request->kategori);
        }

        // Sorting
        if ($request->has('sort') && !empty($request->sort)) {
            $sortOption = $request->sort;
            $sortDirection = $request->get('direction', 'asc');

            if (in_array($sortOption, ['harga', 'popularitas', 'kalori'])) {
                $query->orderBy($sortOption, $sortDirection);
            }
        } else {
            $query->orderBy('popularitas', 'desc');
        }

        $menus = $query->get();

        return view('user.menu', compact('menus'));
    }

    // List menu
    public function index()
    {
        $menus = Menu::paginate(6);
        return view('admin.list', compact('menus')); 
    }

    // Delete menu
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id); 
        if ($menu->gambar) {
            Storage::delete('public/' . $menu->gambar);
        }

        $menu->delete();

        session()->flash('success', 'Menu deleted successfully!');
        
        return redirect()->route('admin.menus');
    }

    // Edit menu
    public function edit($id)
    {
        $menu = Menu::findOrFail($id); 
        return view('admin.menu_form', compact('menu')); 
    }

    // Update menu
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id); 

        $request->validate([
            'nama' => 'required|string|max:100',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'waktu_pengerjaan' => 'required|integer',
            'deskripsi' => 'required|string',
            'harga' => 'required|integer',
            'kategori' => 'required|string|max:100',
            'popularitas' => 'required|integer',
            'kalori' => 'required|integer',
        ], [
            'nama.required' => 'Nama menu wajib diisi.',
            'nama.string' => 'Nama menu harus berupa teks.',
            'nama.max' => 'Nama menu maksimal 100 karakter.',
            
            'gambar.image' => 'File yang diunggah harus berupa gambar.',
            'gambar.mimes' => 'Gambar harus berformat jpeg, png, jpg, atau gif.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.',
            
            'waktu_pengerjaan.required' => 'Waktu pengerjaan wajib diisi.',
            'waktu_pengerjaan.integer' => 'Waktu pengerjaan harus berupa angka.',
            
            'deskripsi.required' => 'Deskripsi menu wajib diisi.',
            'deskripsi.string' => 'Deskripsi menu harus berupa teks.',
            
            'harga.required' => 'Harga menu wajib diisi.',
            'harga.integer' => 'Harga menu harus berupa angka.',
            
            'kategori.required' => 'Kategori menu wajib dipilih.',
            'kategori.string' => 'Kategori menu harus berupa teks.',
            'kategori.max' => 'Kategori menu maksimal 100 karakter.',
            
            'popularitas.required' => 'Popularitas menu wajib diisi.',
            'popularitas.integer' => 'Popularitas menu harus berupa angka.',
            
            'kalori.required' => 'Kalori menu wajib diisi.',
            'kalori.integer' => 'Kalori menu harus berupa angka.',
        ]);

        $imagePath = $menu->gambar;

        if ($request->hasFile('gambar')) {
            if ($menu->gambar && file_exists(public_path('storage/' . $menu->gambar))) {
                unlink(public_path('storage/' . $menu->gambar));
            }

            $originalFileName = $request->gambar->getClientOriginalName();
            $safeFileName = preg_replace('/[^a-zA-Z0-9_-]/', '_', $originalFileName);

            $imagePath = 'menu_images/' . $safeFileName;

            $request->gambar->move(public_path('storage/menu_images'), $imagePath);
        }

        $menu->update([
            'nama' => $request->nama,
            'gambar' => $imagePath,
            'waktu_pengerjaan' => $request->waktu_pengerjaan,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
            'popularitas' => $request->popularitas,
            'kalori' => $request->kalori,
        ]);

        session()->flash('success', 'Menu updated successfully!');

        return redirect()->route('admin.menus');
    }

    // Form untuk menambah menu
    public function create()
    {
        $menus = Menu::all(); 
        return view('admin.menu_create', ['menu' => $menus]); 
    }


    // Submit menu baru
    public function store(Request $request){
        $validatedData = $request -> validate([
            'nama' => 'required|string|max:100',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'waktu_pengerjaan' => 'required|integer',
            'deskripsi' => 'required|string',
            'harga' => 'required|integer',
            'kategori' => 'nullable|string|in:normal,vegan,spicy,dessert',
            'popularitas' => 'required|integer',
            'kalori' => 'required|integer',
            'total_pemesanan'=>'required',
        ]);

        $validatedData['gambar'] = $request ->file('gambar')
        ->store ('gambar');
        Menu::create($validatedData);
        session()->flash('success', 'Menu created successfully!');
        return redirect('admin/menus');
    }
}
