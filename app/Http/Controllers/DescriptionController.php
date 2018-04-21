<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    //
    public function index()
    {
        return view('frontend.opisanie');
    }

    public function back()
    {
        return view('backend.opisanie');
    }
}
