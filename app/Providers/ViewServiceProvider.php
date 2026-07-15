<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Models\WebsiteSetting;


class ViewServiceProvider extends ServiceProvider
{

    public function register(): void
    {

    }



    public function boot(): void
    {

        View::composer('*', function ($view) {


            $view->with(
                'website',
                WebsiteSetting::first()
            );


        });


    }

}