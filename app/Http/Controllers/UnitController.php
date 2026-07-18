<?php

namespace App\Http\Controllers;


use App\Models\EducationUnit;


class UnitController extends Controller
{


    public function index()
    {

        $units = EducationUnit::query()

            ->withCount([
                'students',
                'teachers'
            ])

            ->latest()

            ->paginate(12);



        return view(
            'pages.units.index',
            compact('units')
        );

    }





    public function show(EducationUnit $unit)
    {


        $unit->load([
            'students',
            'teachers'
        ]);



        return view(
            'pages.units.show',
            compact('unit')
        );


    }


}