<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        return view('frontend.plan');
    }

    public function back()
    {
        return view('backend.plan');
    }

    public function store(Request $request) {
        $plan = Plan::create($request->all());

        return redirect()->back();
    }

    public function update(Request $request, Plan $plan) {
        $plan->name = $request->name;
        $plan->image = $request->image;

        $plan->save();

        return redirect()->back();
    }

    public function delete(Plan $plan) {
        $plan->delete();

        return redirect()->back();
    }


}
