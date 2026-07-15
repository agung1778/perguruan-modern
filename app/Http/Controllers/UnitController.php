<?php

namespace App\Http\Controllers;

use App\Models\EducationUnit;

class UnitController extends Controller
{

    public function index()
    {
        $units = EducationUnit::latest()->get();

        return view('units.index', compact('units'));
    }



    public function show(EducationUnit $unit)
    {
        return view('units.show', compact('unit'));
    }

}