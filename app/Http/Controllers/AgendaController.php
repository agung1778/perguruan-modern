<?php

namespace App\Http\Controllers;


use App\Models\Agenda;



class AgendaController extends Controller
{


    public function index()
    {


        $agendas = Agenda::query()

            ->orderBy(
                'date'
            )

            ->paginate(10);



        return view(
            'pages.agenda.index',
            compact('agendas')
        );


    }





    public function show(Agenda $agenda)
    {


        return view(
            'pages.agenda.show',
            compact('agenda')
        );


    }


}