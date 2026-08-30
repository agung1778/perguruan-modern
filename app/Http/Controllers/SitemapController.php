<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\EducationUnit;
use App\Models\GalleryAlbum;
use App\Models\NewsArticle;
use App\Models\Ppdb;
use Illuminate\Support\Facades\Cache;

class SitemapController extends Controller
{
    public function index()
    {
        $xml = Cache::remember(
            'sitemap.xml',
            now()->addHours(6),
            function () {
                $pages = [
                    [
                        'loc' => route('home'),
                        'lastmod' => now()->toAtomString(),
                        'changefreq' => 'daily',
                        'priority' => '1.0',
                    ],
                    [
                        'loc' => route('about'),
                        'changefreq' => 'monthly',
                        'priority' => '0.8',
                    ],
                    [
                        'loc' => route('units.index'),
                        'changefreq' => 'weekly',
                        'priority' => '0.9',
                    ],
                    [
                        'loc' => route('news.index'),
                        'changefreq' => 'daily',
                        'priority' => '0.9',
                    ],
                    [
                        'loc' => route('agenda.index'),
                        'changefreq' => 'weekly',
                        'priority' => '0.7',
                    ],
                    [
                        'loc' => route('gallery.index'),
                        'changefreq' => 'weekly',
                        'priority' => '0.6',
                    ],
                    [
                        'loc' => route('testimonials.index'),
                        'changefreq' => 'monthly',
                        'priority' => '0.5',
                    ],
                    [
                        'loc' => route('contact'),
                        'changefreq' => 'monthly',
                        'priority' => '0.6',
                    ],
                    [
                        'loc' => route('ppdb.index'),
                        'changefreq' => 'weekly',
                        'priority' => '0.9',
                    ],
                ];

                $news = NewsArticle::query()
                    ->published()
                    ->latest('published_at')
                    ->get();

                foreach ($news as $article) {
                    $pages[] = [
                        'loc' => route('news.show', $article),
                        'lastmod' => ($article->published_at ?? $article->updated_at)
                            ->toAtomString(),
                        'changefreq' => 'monthly',
                        'priority' => '0.8',
                    ];
                }

                $units = EducationUnit::query()
                    ->active()
                    ->get();

                foreach ($units as $unit) {
                    $pages[] = [
                        'loc' => route('units.show', $unit),
                        'lastmod' => $unit->updated_at->toAtomString(),
                        'changefreq' => 'monthly',
                        'priority' => '0.8',
                    ];
                }

                $agendas = Agenda::query()
                    ->active()
                    ->orderByDesc('date')
                    ->get();

                foreach ($agendas as $agenda) {
                    $pages[] = [
                        'loc' => route('agenda.show', $agenda),
                        'lastmod' => $agenda->updated_at->toAtomString(),
                        'changefreq' => 'weekly',
                        'priority' => '0.6',
                    ];
                }

                $albums = GalleryAlbum::query()
                    ->latest()
                    ->get();

                foreach ($albums as $album) {
                    $pages[] = [
                        'loc' => route('gallery.show', $album),
                        'lastmod' => $album->updated_at->toAtomString(),
                        'changefreq' => 'monthly',
                        'priority' => '0.5',
                    ];
                }

                $ppdbs = Ppdb::query()
                    ->published()
                    ->latest()
                    ->get();

                foreach ($ppdbs as $ppdb) {
                    $pages[] = [
                        'loc' => route('ppdb.show', $ppdb),
                        'lastmod' => $ppdb->updated_at->toAtomString(),
                        'changefreq' => 'weekly',
                        'priority' => '0.8',
                    ];
                }

                $content = '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL;
                $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'.PHP_EOL;

                foreach ($pages as $page) {
                    $content .= '  <url>'.PHP_EOL;
                    $content .= '    <loc>'.e($page['loc']).'</loc>'.PHP_EOL;

                    if (isset($page['lastmod'])) {
                        $content .= '    <lastmod>'.$page['lastmod'].'</lastmod>'.PHP_EOL;
                    }

                    $content .= '    <changefreq>'.$page['changefreq'].'</changefreq>'.PHP_EOL;
                    $content .= '    <priority>'.$page['priority'].'</priority>'.PHP_EOL;
                    $content .= '  </url>'.PHP_EOL;
                }

                $content .= '</urlset>';

                return $content;
            }
        );

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
        ]);
    }
}
