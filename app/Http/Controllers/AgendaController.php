<?php

namespace App\Http\Controllers;

use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::query()
            ->active()
            ->whereNotNull('date')
            ->whereDate('date', '>=', now()->toDateString())
            ->orderBy('date')
            ->paginate(10);

        return view(
            'pages.agenda.index',
            compact('agendas')
        );
    }

    public function show(Agenda $agenda)
    {
        abort_unless($agenda->is_active, 404);

        return view(
            'pages.agenda.show',
            compact('agenda')
        );
    }
}