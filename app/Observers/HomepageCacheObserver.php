<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;

class HomepageCacheObserver
{
    protected function clearHomepageCache(): void
    {
        Cache::forget('homepage.data.latest');

        $academicYears = \App\Models\StudentData::query()
            ->whereNotNull('academic_year')
            ->distinct()
            ->pluck('academic_year');

        foreach ($academicYears as $year) {
            Cache::forget('homepage.data.' . $year);
        }
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