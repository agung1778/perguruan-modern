<?php

namespace App\Http\Controllers;

    use App\Models\NewsArticle;
    use App\Models\NewsCategory;


class NewsController extends Controller
{
    public function index()
    {
        $news = NewsArticle::with('category')
            ->latest()
            ->paginate(10);

        $categories = NewsCategory::all();

        return view('pages.news.index', compact(
            'news',
            'categories'
        ));
    }

    public function show(NewsArticle $news)
    {
        abort_if(
            $news->status !== 'published',
            404
        );
        return view(
            'pages.news.show',
            compact('news')
        );
    }
}