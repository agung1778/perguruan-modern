<?php

namespace App\Http\Controllers;


use App\Models\EducationUnit;

use App\Models\NewsArticle;

use App\Models\Agenda;

use App\Models\GalleryAlbum;

use App\Models\Testimonial;
use App\Models\HomepageBanner;
use App\Models\WebsiteSetting;
use App\Models\Teacher;
use App\Models\Student;


class HomeController extends Controller
{

public function index()
{


return view('home',[


'banners'=>

HomepageBanner::where(
'is_active',
true
)
->latest()
->get(),



'setting'=>

WebsiteSetting::first(),



'units'=>

EducationUnit::latest()
->get(),



'news'=>

NewsArticle::latest()
->take(3)
->get(),



'agendas'=>

Agenda::latest()
->take(3)
->get(),



'gallery'=>

GalleryAlbum::latest()
->take(6)
->get(),



'testimonials'=>

Testimonial::latest()
->take(3)
->get(),



'stats'=>[


'units'=>
EducationUnit::count(),


'teachers'=>
Teacher::count(),


'students'=>
Student::count(),


'news'=>
NewsArticle::count(),


]



]);


}


}