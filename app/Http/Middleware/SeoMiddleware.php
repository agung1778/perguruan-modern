<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SeoMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        View::share('seo_defaults', [
            'title' => 'Perguruan Amaliah',
            'description' => 'Website resmi Perguruan Amaliah - unit pendidikan berbasis Islami yang mencetak generasi unggul.',
        ]);

        return $next($request);
    }
}
