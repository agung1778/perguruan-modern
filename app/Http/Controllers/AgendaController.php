<?php

namespace App\Http\Controllers;


use App\Models\Agenda;


class AgendaController extends Controller
{


public function index()
{


$agendas =
Agenda::latest()->get();



return view(
'agenda.index',
compact('agendas')
);


}


}