<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $image = new Image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $imageManager = new \Intervention\Image\Image();

            $imageManager->make($file)
                ->resize(100, 100, function ($constraint){
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads') . '/' . $file->getClientOriginalName());
            $image->image = $file->getClientOriginalName();
        }
        $image->slider_id = $request->slider_id;
        $image->save();

        return redirect()->back();
    }

    public function update(Request $request, Image $image)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $imageManager = new \Intervention\Image\Image();

            $imageManager->make($file)
                ->resize(100, 100, function ($constraint){
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads') . '/' . $file->getClientOriginalName());
            $image->image = $file->getClientOriginalName();
        }
        $image->slider_id = $request->slider_id;
        $image->save();

        return redirect()->back();
    }

    public function delete(Image $image)
    {
        $image->delete();

        return redirect()->back();
    }
}
