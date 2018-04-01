<?php

namespace App\Http\Controllers;

use App\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index() {
        return view('', [
            'features' => Feature::all(),
        ]);
    }
}
