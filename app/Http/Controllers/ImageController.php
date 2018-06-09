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
            if (is_file(public_path('uploads/slides/large/'.$image->image))) {
                unlink(public_path('uploads/slides/large/'.$image->image));
                unlink(public_path('uploads/slides/small/'.$image->image));
            }
            $file = $request->file('image');

            $imageManager = new \Intervention\Image\ImageManager();

            $fileName = uniqid('image_').md5(uniqid().$file->getClientOriginalName()).'.jpg';

            $imageManager->make($file)
                ->resize(1300, 1300, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/slides/large') . '/' . $fileName, 80)
                ->resize(300, 300, function ($constraint){
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/slides/small') . '/' . $fileName);

            $image->image = $fileName;
        }
        $image->slider_id = $request->slider_id;
        $image->save();

        return redirect()->back();
    }

    public function update(Request $request, Image $image)
    {
        if ($request->hasFile('image')) {
            if (is_file(public_path('uploads/slides/large/'.$image->image))) {
                unlink(public_path('uploads/slides/large/'.$image->image));
                unlink(public_path('uploads/slides/small/'.$image->image));
            }
            $file = $request->file('image');

            $imageManager = new \Intervention\Image\ImageManager();

            $fileName = uniqid('image_').md5(uniqid().$file->getClientOriginalName()).'.jpg';

            $imageManager->make($file)
                ->resize(1300, 1300, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/slides/large') . '/' . $fileName, 80)
                ->resize(300, 300, function ($constraint){
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/slides/small') . '/' . $fileName);

            $image->image = $fileName;
        }
        $image->slider_id = $request->slider_id;
        $image->save();

        return redirect()->back();
    }

    public function destroy(Image $image)
    {
        $image->delete();

        return redirect()->back();
    }
}
