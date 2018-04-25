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
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');

            $imageManager = new \Intervention\Image\Image();

            $imageManager->make($file)
                ->resize(100, 100, function ($constraint){
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/icons') . '/' . $file->getClientOriginalName());

            $benefit->icon = $file->getClientOriginalName();
        }
        $benefit->save();

        return redirect()->back();
    }

    public function delete(Benefit $benefit) {
        $benefit->delete();

        return redirect()->back();
    }
}
