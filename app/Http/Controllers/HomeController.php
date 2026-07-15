<?php

namespace App\Http\Controllers;


use App\Models\EducationUnit;

use App\Models\NewsArticle;

use App\Models\Agenda;

use App\Models\GalleryAlbum;

use App\Models\Testimonial;
use App\Models\HomepageBanner;
use App\Models\WebsiteSetting;
use App\Models\FoundationLeader;
use App\Models\FoundationOrganization;
use App\Models\Teacher;
use App\Models\Student;


class HomeController extends Controller
{
public function index()
{
    return view('pages.home', [

        'website' => WebsiteSetting::first(),

        'banners' => HomepageBanner::active()->get(),

        'leader' => FoundationLeader::active()->first(),

        'organizations' => FoundationOrganization::active()->ordered()->get(),

        'units' => EducationUnit::active()->get(),

        'news' => NewsArticle::published()->latest()->take(3)->get(),

        'agendas' => Agenda::latest()->take(3)->get(),

        'gallery' => GalleryAlbum::with('photos')->latest()->take(6)->get(),

        'testimonials' => Testimonial::active()->latest()->take(6)->get(),

        'stats' => [
            [
                'title' => 'Guru',
                'value' => Teacher::count(),
            ],
            [
                'title' => 'Siswa',
                'value' => Student::count(),
            ],
            [
                'title' => 'Unit',
                'value' => EducationUnit::count(),
            ],
            [
                'title' => 'Berita',
                'value' => NewsArticle::count(),
            ],
        ]

    ]);
}


}