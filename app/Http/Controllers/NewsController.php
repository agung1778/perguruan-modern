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
        // Hanya berita published yang bisa dibuka
        abort_unless(
            $news->status === 'published',
            404
        );

        // Ambil berita terbaru
        $latest = NewsArticle::query()
            ->where('status', 'published')
            ->where(
                $news->getKeyName(),
                '!=',
                $news->getKey()
            )
            ->latest()
            ->take(5)
            ->get();

        return view(
            'pages.news.show',
            compact(
                'news',
                'latest'
            )
        );
    }
}