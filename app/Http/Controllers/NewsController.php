<?php

namespace App\Http\Controllers;


use App\Models\NewsArticle;



class NewsController extends Controller
{


public function index()
{


$news =
NewsArticle::with('category')
->latest()
->paginate(9);



return view(
'pages.news.index',
compact('news')
);


}




public function show(NewsArticle $news)
{


return redirect()->route('news.show', [
    'news' => $news->slug
]);


}


}