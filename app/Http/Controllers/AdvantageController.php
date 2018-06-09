<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\Menu;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    //
    public function index()
    {
        $menu = Menu::find(1);
        $items = collect()->merge($menu->sliders)->merge($menu->benefits)->merge($menu->advantages);
        $items = $items->sortBy('position');

        return view('frontend.advantage', [
            'items' => $items,
        ]);
    }

    public function store(Request $request)
    {
        $advantage = new Advantage($request->all());

        $advantage->save();

        return redirect()->back();
    }

    public function update(Request $request, Advantage $advantage)
    {
        $advantage->update($request->request->all());
        if ($request->hasFile('icon_image')) {
            if (is_file(public_path('uploads/icons/'.$advantage->icon_image))) {
                unlink(public_path('uploads/icons/'.$advantage->icon_image));
            }
            $file = $request->file('icon_image');

            $imageManager = new \Intervention\Image\ImageManager();

            $fileName = uniqid('icon_image_').md5(uniqid().$file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();

            $imageManager->make($file)
                ->resize(100, 100, function ($constraint){
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/icons') . '/' . $fileName);

            $advantage->icon_image = $fileName;
        }
        if ($request->hasFile('image')) {
            if (is_file(public_path('uploads/images/large/'.$advantage->image))) {
                unlink(public_path('uploads/images/large/'.$advantage->image));
                unlink(public_path('uploads/images/small/'.$advantage->image));
            }
            $file = $request->file('image');

            $imageManager = new \Intervention\Image\ImageManager();

            $fileName = uniqid('advantage_image_').md5(uniqid().$file->getClientOriginalName()).'.jpg';

            $imageManager->make($file)
                ->resize(1300, 1300, function ($constraint){
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/images/large') . '/' . $fileName, 80)
                ->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/images/small') . '/' . $fileName);

            $advantage->image = $fileName;
        }
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
        $menu = Menu::find(1);
        $items = collect()->merge($menu->sliders)->merge($menu->benefits)->merge($menu->advantages);
        $items = $items->sortBy('position');

        return view('backend.advantage', [
            'items' => $items,
            'menu' => $menu,
        ]);
    }
}
