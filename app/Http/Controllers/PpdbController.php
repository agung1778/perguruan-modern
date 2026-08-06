<?php

namespace App\Http\Controllers;

use App\Models\EducationUnit;
use App\Models\Ppdb;

class PpdbController extends Controller
{
    /**
     * Menampilkan daftar PPDB.
     */
    public function index()
    {
        $units = EducationUnit::query()
            ->withCount([
                'ppdbs' => function ($query) {
                    $query->published();
                },
            ])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        $ppdbs = Ppdb::query()
            ->with('educationUnit')
            ->published()
            ->latest()
            ->paginate(12);

        return view(
            'pages.ppdb.index',
            compact(
                'units',
                'ppdbs'
            )
        );
    }

    /**
     * Menampilkan detail PPDB.
     */
    public function show(Ppdb $ppdb)
    {
        abort_unless(
            $ppdb->is_published &&
            $ppdb->status === 'open',
            404
        );

        $ppdb->load('educationUnit');

        $units = EducationUnit::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        $related = Ppdb::query()
            ->with('educationUnit')
            ->where('education_unit_id', $ppdb->education_unit_id)
            ->whereKeyNot($ppdb->id)
            ->published()
            ->latest()
            ->take(4)
            ->get();

        return view(
            'pages.ppdb.show',
            compact(
                'ppdb',
                'related',
                'units'
            )
        );
    }
}
