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
        $benefit->update($request->all());

        return redirect()->back();
    }

    public function destroy(Benefit $benefit) {
        $benefit->delete();

        return redirect()->back();
    }
}
