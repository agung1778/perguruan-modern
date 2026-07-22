<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SeoMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        view()->share('seo', [
            'title' => 'SIP perguruan Amaliah',
            'description' => 'Website resmi SIP Perguruan Amaliah',
        ]);

        return $next($request);
    }
}