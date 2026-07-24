<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Schema;
use App\Models\WebsiteSetting;
use App\Models\HomepageBanner;
use App\Models\About;
use App\Models\EducationUnit;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\FoundationLeader;
use App\Models\FoundationOrganization;
use App\Models\NewsArticle;
use App\Models\Agenda;
use App\Models\GalleryAlbum;
use App\Models\Testimonial;
use App\Observers\HomepageCacheObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        WebsiteSetting::observe(HomepageCacheObserver::class);
        HomepageBanner::observe(HomepageCacheObserver::class);
        About::observe(HomepageCacheObserver::class);
        EducationUnit::observe(HomepageCacheObserver::class);
        Teacher::observe(HomepageCacheObserver::class);
        Student::observe(HomepageCacheObserver::class);
        FoundationLeader::observe(HomepageCacheObserver::class);
        FoundationOrganization::observe(HomepageCacheObserver::class);
        NewsArticle::observe(HomepageCacheObserver::class);
        Agenda::observe(HomepageCacheObserver::class);
        GalleryAlbum::observe(HomepageCacheObserver::class);
        Testimonial::observe(HomepageCacheObserver::class);
    }
}
