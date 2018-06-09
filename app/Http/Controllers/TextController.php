<?php

namespace App\Http\Controllers;

use App\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function store(Request $request)
    {
        $text = new Text($request->all());

        if ($request->hasFile('icon')) {
            if (is_file(public_path('uploads/icons/'.$text->icon))) {
                unlink(public_path('uploads/icons/'.$text->icon));
            }
            $file = $request->file('icon');

            $imageManager = new \Intervention\Image\ImageManager();

            $fileName = uniqid('icon_').md5(uniqid().$file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();

            $imageManager->make($file)
                ->resize(100, 100, function ($constraint){
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/icons') . '/' . $fileName);

            $text->icon = $fileName;
        }
        $text->save();

        return redirect()->back();
    }

    public function update(Request $request, Text $text)
    {
        $text->update($request->request->all());

        if ($request->hasFile('icon')) {
            if (is_file(public_path('uploads/icons/'.$text->icon))) {
                unlink(public_path('uploads/icons/'.$text->icon));
            }
            $file = $request->file('icon');

            $imageManager = new \Intervention\Image\ImageManager();

            $fileName = uniqid('icon_').md5(uniqid().$file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();

            $imageManager->make($file)
                ->resize(100, 100, function ($constraint){
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/icons') . '/' . $fileName);

            $text->icon = $fileName;
        }
        $text->save();

        return redirect()->back();
    }

    public function destroy(Text $text)
    {
        $text->delete();

        return redirect()->back();
    }
}
