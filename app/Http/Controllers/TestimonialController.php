<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {

        $testimonials = Testimonial::query()

            ->active()

            ->latest()

            ->paginate(12);

        return view(
            'pages.testimonials.index',
            compact('testimonials')
        );

    }
}
