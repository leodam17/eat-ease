<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function menu() {
        $menus = Menu::orderBy('popularitas', 'desc')->get();
        return view('user.menu', compact('menus'));
    } 
}
