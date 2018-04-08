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
        $benefit = Benefit::create($request->all());

        return redirect()->back();
    }

    public function update(Request $request, Benefit $benefit) {
        $benefit->title = $request->title;
        $benefit->bcontent = $request->bcontent;
        if ($request->icon) {
            $benefit->icon = $request->icon;
        }
        if ($request->image) {
            $benefit->image = $request->image;
        }
        $benefit->parent_id = $request->parent_id;
        $benefit->menu_id = $request->menu_id;

        $benefit->save();

        return redirect()->back();
    }

    public function delete(Benefit $benefit) {
        $benefit->delete();

        return redirect()->back();
    }
}
