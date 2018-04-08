<?php

namespace App\Http\Controllers;

use App\App;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function edit() {
        $app = App::find(1);

        return view('app.edit', [
            'app' => $app,
        ]);
    }

    public function update(Request $request, App $app) {
        $app->title = $request->title;
        if ($request->logo) {
            $app->logo = $request->logo;
        }
        $app->phone1 = $request->phone1;
        $app->phone2 = $request->phone2;
        $app->phone3 = $request->phone3;
        $app->email = $request->email;
        $app->description = $request->description;
        $app->color = $request->color;
        $app->facebook = $request->facebook;
        $app->instagram = $request->instagram;
        $app->vkontakte = $request->vkontakte;
        $app->ok = $request->ok;

        $app->save();

        return redirect()->back();
    }
}
