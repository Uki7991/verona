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

    public function store(Request $request) {
        $benefit = new Advantage($request->all());
        $benefit->save();

        return redirect()->back();
    }

    public function update(Request $request, Advantage $advantage) {
        $advantage->update($request->all());

        return redirect()->back();
    }

    public function destroy(Advantage $advantage) {
        $advantage->delete();

        return redirect()->back();
    }

    public function back()
    {
        return view('backend.advantage');
    }
}
