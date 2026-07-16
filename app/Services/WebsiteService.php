<?php

namespace App\Services;

use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\Cache;

class WebsiteService
{
    public function setting()
    {
        return Cache::rememberForever(
            'website.setting',

            fn () => WebsiteSetting::first()
        );
    }

    public function clear()
    {
        Cache::forget('website.setting');
    }
}