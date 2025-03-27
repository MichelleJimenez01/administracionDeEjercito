<?php

namespace App\Http\Controllers;

use App\Models\Quarter;
use Illuminate\Http\Request;

class QuarterController extends Controller
{
    public function quarter() {
        return view("create");
    }
    public function create()
    {
        return view('quarter');
    }

    public function store(Request $request)
    {
        $quarter = new Quarter();
        $quarter->name_quarter = $request->name_quarter;
        $quarter->location = $request->location;
        $quarter->save();

        return redirect()->back()->with('success', 'Quarter registrado correctamente');
    }
}
