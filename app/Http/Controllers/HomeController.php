<?php

namespace App\Http\Controllers;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index() {
        $menus = Menu::orderBy('popularitas', 'desc')->get();
        return view('user.home', compact('menus'));
    } 

    public function about()
    {
        return view('user.about');
    }

    public function menu()
    {
        return view('user.menu');
    }
}
