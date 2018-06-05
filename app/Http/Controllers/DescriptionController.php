<?php

namespace App\Http\Controllers;

use App\Benefit;
use App\Menu;
use App\Slider;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    //
    public function index()
    {
        $menu = Menu::find(1);
        $items = collect()->merge($menu->sliders)->merge($menu->benefits);
        $items = $items->sortBy('position');

        return view('frontend.opisanie', [
            'items' => $items,
        ]);
    }

    public function back()
    {
        $menu = Menu::find(1);
        $items = collect()->merge($menu->sliders)->merge($menu->benefits);
        $items = $items->sortBy('position');

        return view('backend.opisanie', [
            'items' => $items,
        ]);
    }
}
