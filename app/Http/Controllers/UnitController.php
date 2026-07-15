<?php

namespace App\Http\Controllers;

use App\Models\EducationUnit;


class UnitController extends Controller
{


    public function index()
    {

        $units = EducationUnit::query()

            ->where('is_active', true)

            ->withCount([
                'teachers',
                'students'
            ])

            ->get();


        return view('pages.units.index', compact('units'));

    }



    public function show(EducationUnit $unit)
    {


        abort_if(
            !$unit->is_active,
            404
        );


        $unit->loadCount([
            'teachers',
            'students'
        ]);


        return view('pages.units.show', compact('unit'));


    }


}