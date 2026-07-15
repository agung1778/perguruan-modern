<?php

namespace App\Http\Controllers;


use App\Models\Agenda;


class AgendaController extends Controller
{


    public function index()
    {


        $agendas = Agenda::query()

            ->where('is_active',true)

            ->latest('date')

            ->paginate(10);



        return view('pages.agenda.index',[

            'agendas'=>$agendas

        ]);


    }





    public function show(Agenda $agenda)
    {


        abort_if(
            !$agenda->is_active,
            404
        );



        return view('pages.agenda.show',[

            'agenda'=>$agenda

        ]);


    }


}