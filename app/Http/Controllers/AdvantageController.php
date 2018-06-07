<?php

namespace App\Http\Controllers;

use App\Advantage;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    //
    public function index()
    {
        return view('frontend.advantage');
    }

    public function store(Request $request)
    {
        $advantage = new Advantage();

        $advantage->name = $request->name;
        $advantage->image = $request->image;
        $advantage->icon_image = $request->icon_image;
        $advantage->description = $request->description;
        $advantage->save();

        return redirect()->back();
    }

    public function update(Request $request, Advantage $advantage)
    {
        $advantage->name = $request->name;
        $advantage->image = $request->image;
        $advantage->icon_image = $request->icon_image;
        $advantage->description = $request->description;
        $advantage->save();

        return redirect()->back();
    }

    public function destroy(Advantage $advantage)
    {
        $advantage->delete();

        return redirect()->back();
    }

    public function back()
    {
        return view('backend.advantage');
    }
}
