<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index()
    {
        $menu = Menu::find(2);
        $items = collect()->merge($menu->sliders)->merge($menu->benefits);
        $items = $items->sortBy('position');

        return view('frontend.gallery', [
            'items' => $items,
        ]);
    }

    public function back()
    {
        $menu = Menu::find(2);
        $items = collect()->merge($menu->sliders)->merge($menu->benefits);
        $items = $items->sortBy('position');

        return view('backend.gallery', [
            'items' => $items,
            'menu' => $menu,
        ]);
    }
}
