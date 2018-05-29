<?php

namespace App\Http\Controllers;

use App\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function store(Request $request)
    {
        $text = new Text();

        $text->text = $request->text;
        $text->benefit_id = $request->benefit_id;
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');

            $imageManager = new \Intervention\Image\ImageManager();

            $imageManager->make($file)
                ->resize(100, 100, function ($constraint){
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/icons') . '/' . $file->getClientOriginalName());

            $text->icon = $file->getClientOriginalName();
        }
        $text->save();

        return redirect()->back();
    }

    public function update(Request $request, Text $text)
    {
        $text->text = $request->text;
        $text->benefit_id = $request->benefit_id;
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');

            $imageManager = new \Intervention\Image\ImageManager();

            $imageManager->make($file)
                ->resize(100, 100, function ($constraint){
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/icons') . '/' . $file->getClientOriginalName());

            $text->icon = $file->getClientOriginalName();
        }
        $text->save();

        return redirect()->back();
    }

    public function delete(Text $text)
    {
        $text->delete();

        return redirect()->back();
    }
}
