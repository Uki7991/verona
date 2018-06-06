<?php

namespace App\Http\Controllers;

use App\Benefit;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    public function index() {
        return view('benefits.index', [
            'benefits' => Benefit::all(),
        ]);
    }

    public function store(Request $request) {
        $benefit = new Benefit($request->all());
        $benefit->save();

        return redirect()->back();
    }

    public function update(Request $request, Benefit $benefit) {
        $benefit->title = $request->title;
        $benefit->menu_id = $request->menu_id;
        $benefit->save();

        return redirect()->back();
    }

    public function delete(Benefit $benefit) {
        $benefit->delete();

        return redirect()->back();
    }
}
