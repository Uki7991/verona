<?php

namespace App\Http\Controllers;

use App\Object;
use Illuminate\Http\Request;

class ObjectController extends Controller
{
    public function index() {
        return view('', [
            'objects' => Object::all(),
        ]);
    }

    public function update(Request $request, Object $object) {
        $object->name = $request->name;
        $object->slugName = $request->slugName;
        $object->logo = $request->logo;
        $object->isActive = $request->isActive;

        $object->save();

        return redirect()->back();
    }

    public function delete(Object $object) {
        $object->delete();

        return redirect()->back();
    }
}
