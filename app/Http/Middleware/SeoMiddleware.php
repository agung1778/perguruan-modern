<?php

namespace App\Http\Middleware;


use Closure;


class SeoMiddleware
{


public function handle($request,Closure $next)
{


view()->share(
'seo',
[

'title'=>'Perguruan Modern',

'description'=>
'Website resmi Perguruan Modern'

]

);



return $next($request);


}


}