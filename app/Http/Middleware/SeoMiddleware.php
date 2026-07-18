<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SeoMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        view()->share('seo', [
            'title' => 'Perguruan Modern',
            'description' => 'Website resmi Perguruan Modern',
        ]);

        return $next($request);
    }
}