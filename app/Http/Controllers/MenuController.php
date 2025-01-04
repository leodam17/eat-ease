<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
public function menu(Request $request) {
    $query = Menu::query();

    // Search functionality
    if ($request->has('search') && !empty($request->search)) {
        $query->where('nama', 'like', '%' . $request->search . '%')
              ->orWhere('deskripsi', 'like', '%' . $request->search . '%');
    }

    // Filter by category
    if ($request->has('kategori') && !empty($request->kategori)) {
        $query->where('kategori', $request->kategori);
    }

    // Sorting functionality
    if ($request->has('sort') && !empty($request->sort)) {
        $sortOption = $request->sort;
        $sortDirection = $request->get('direction', 'asc'); // Default to ascending

        if (in_array($sortOption, ['harga', 'popularitas', 'kalori'])) {
            $query->orderBy($sortOption, $sortDirection);
        }
    } else {
        $query->orderBy('popularitas', 'desc'); // Default sorting
    }

    $menus = $query->get();

    return view('user.menu', compact('menus'));
}

}
