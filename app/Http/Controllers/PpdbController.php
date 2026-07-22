<?php

namespace App\Http\Controllers;

use App\Models\EducationUnit;
use App\Models\Ppdb;

class PpdbController extends Controller
{
    public function index()
    {
        $units = EducationUnit::query()
            ->withCount([
                'ppdbs' => function ($query) {
                    $query->published();
                },
            ])
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

    public function show(Ppdb $ppdb)
    {
        abort_unless(
            $ppdb->is_published &&
            $ppdb->status === 'published',
            404
        );

        $ppdb->load(
            'educationUnit'
        );

        $related = Ppdb::query()
            ->where(
                'education_unit_id',
                $ppdb->education_unit_id
            )
            ->where(
                'id',
                '!=',
                $ppdb->id
            )
            ->published()
            ->latest()
            ->take(4)
            ->get();

        return view(
            'pages.ppdb.show',
            compact(
                'ppdb',
                'related'
            )
        );
    }
}