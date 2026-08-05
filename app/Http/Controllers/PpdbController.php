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
        // Jika PPDB tidak dipublikasikan,
        // tampilkan halaman 404.
        abort_unless(
            $ppdb->is_published &&
            $ppdb->status === 'published',
            404
        );

        // Load unit pendidikan.
        $ppdb->load('educationUnit');

        // Ambil PPDB terkait dari unit pendidikan yang sama.
        $related = Ppdb::query()
            ->with('educationUnit')
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
