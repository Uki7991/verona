<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StageController extends Controller
{
    //
    public function index()
    {
        return view('frontend.stage');
    }

    public function back()
    {
        return view('backend.stage');
    }
}
