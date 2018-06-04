<?php

namespace App\Http\Controllers;

use App\Benefit;
use App\Slider;
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
        $slider1 = Slider::find(1);
        $slider2 = Slider::find(2);
        $benefit1 = Benefit::find(1);
        $benefit2 = Benefit::find(2);
        $benefit3 = Benefit::find(3);

        return view('backend.opisanie', [
            'slider1' => $slider1,
            'slider2' => $slider2,
            'benefit1' => $benefit1,
            'benefit2' => $benefit2,
            'benefit3' => $benefit3,
        ]);
    }
}
