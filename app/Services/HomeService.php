<?php

namespace App\Services;

use App\Models\Agenda;
use App\Models\Testimonial;
use App\Models\HomepageBanner;
use App\Models\GalleryAlbum;
use App\Models\EducationUnit;
use App\Models\NewsArticle;
use App\Models\FoundationLeader;
use App\Models\FoundationOrganization;
use Illuminate\Support\Facades\Cache;

class HomeService
{
    public function data()
    {
        return Cache::remember(

            'homepage',

            now()->addMinutes(30),

            function () {

                return [

                    'banners'=>HomepageBanner::where('is_active',true)->get(),

                    'units'=>EducationUnit::where('is_active',true)

                        ->withCount([
                            'teachers',
                            'students'
                        ])

                        ->get(),

                    'news'=>NewsArticle::published()

                        ->latest()

                        ->take(3)

                        ->get(),

                    'agendas'=>Agenda::where('is_active',true)

                        ->latest()

                        ->take(3)

                        ->get(),

                    'gallery'=>GalleryAlbum::with('photos')

                        ->latest()

                        ->take(6)

                        ->get(),

                    'testimonials'=>Testimonial::where('is_active',true)

                        ->take(6)

                        ->get(),

                    'leader'=>FoundationLeader::active()->first(),

                    'organizations'=>FoundationOrganization::active()

                        ->ordered()

                        ->get(),

                ];

            }

        );
    }
}