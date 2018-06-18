<?php

namespace App\Http\Controllers;

use App\App;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class AppController extends Controller
{
    public function edit() {
        $app = App::find(1);

        return view('app.edit', [
            'app' => $app,
        ]);
    }

    public function update(Request $request, App $app) {
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = uniqid('logo_').md5(uniqid()).'.'.$file->getClientOriginalExtension();

            $imageManager = new ImageManager();

            $imageManager->make($file)
                ->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('app/logo/'.$fileName));

            $app->logo = $fileName;
        }
        $request->request->add(['logo' => $app->logo]);
        $app->fill($request->request->all());

        $app->save();

        return redirect()->back();
    }
}
