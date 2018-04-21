<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index()
    {
        return view('frontend.gallery');
    }

    public function back()
    {
        return view('backend.gallery');
    }
}
