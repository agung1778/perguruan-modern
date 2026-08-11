<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Agenda;
use App\Models\EducationUnit;
use App\Models\FoundationLeader;
use App\Models\FoundationOrganization;
use App\Models\GalleryAlbum;
use App\Models\HomepageBanner;
use App\Models\NewsArticle;
use App\Models\StudentData;
use App\Models\Testimonial;
use App\Models\Teacher;
use App\Models\WebsiteSetting;
use App\Observers\HomepageCacheObserver;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
        if (! app()->environment('local')) {
            URL::forceScheme('https');
        }

        Schema::defaultStringLength(191);

        RateLimiter::for('web', function ($request) {
            return Limit::perMinute(120)->by(
                $request->user()?->id
                ?? $request->ip()
            );
        });

        $models = [
            WebsiteSetting::class,
            HomepageBanner::class,
            About::class,
            EducationUnit::class,
            Teacher::class,
            StudentData::class,
            FoundationLeader::class,
            FoundationOrganization::class,
            NewsArticle::class,
            Agenda::class,
            GalleryAlbum::class,
            Testimonial::class,
        ];

        foreach ($models as $model) {
            $model::observe(HomepageCacheObserver::class);
        }
    }
}
