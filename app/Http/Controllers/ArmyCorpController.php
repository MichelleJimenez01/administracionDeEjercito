<?php

namespace App\Http\Controllers;


use App\Models\ArmyCorp;
use Illuminate\Http\Request;

class ArmyCorpController extends Controller
{
    public function army_corp() {
        return view("create");
    }
    public function create()
    {
        return view('army_corp');
    }

    public function store(Request $request)
    {
        $armyCorp = new ArmyCorp();
        $armyCorp->denomination = $request->denomination;
        $armyCorp->save();

        return redirect()->back()->with('success', 'Army Corps registrado correctamente');
    }
}
