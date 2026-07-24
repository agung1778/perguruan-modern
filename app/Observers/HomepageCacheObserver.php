<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;

class HomepageCacheObserver
{
    protected function clearHomepageCache(): void
    {
        Cache::forget('homepage.data');
    }

    public function created(object $model): void
    {
        $this->clearHomepageCache();
    }

    public function updated(object $model): void
    {
        $this->clearHomepageCache();
    }

    public function deleted(object $model): void
    {
        $this->clearHomepageCache();
    }

    public function restored(object $model): void
    {
        $this->clearHomepageCache();
    }

    public function forceDeleted(object $model): void
    {
        $this->clearHomepageCache();
    }
}