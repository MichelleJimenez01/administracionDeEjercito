<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company() {
        return view("create");
    }
    public function create()
    {
        return view('company');
    }
   

    public function store(Request $request)
    {
        $company = new Company();
        $company->activityCompany = $request->activityCompany;
        $company->save();

        return redirect()->back()->with('success', 'Company registrada correctamente');
    }
}
