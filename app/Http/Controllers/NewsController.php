<?php

namespace App\Http\Controllers;


use App\Models\NewsArticle;



class NewsController extends Controller
{


public function index()
{


$news = NewsArticle::latest()
->paginate(9);



return view(
'news.index',
compact('news')
);


}




public function show(NewsArticle $news)
{


return view(
'news.show',
compact('news')
);


}


}