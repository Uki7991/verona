<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function store(Request $request) {
        $benefit = new Slider($request->all());
        $benefit->save();

        return redirect()->back();
    }

    public function update(Request $request, Slider $slider) {
        $slider->update($request->all());

        return redirect()->back();
    }

    public function destroy(Slider $slider) {
        $slider->delete();

        return redirect()->back();
    }
}
