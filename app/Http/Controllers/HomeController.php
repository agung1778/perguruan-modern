<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use App\Services\StatisticService;

class HomeController extends Controller
{
    public function index(

        HomeService $home,

        StatisticService $stat

    )
    {

        return view(

            'pages.home',

            array_merge(

                $home->data(),

                [

                    'stats'=>$stat->homepage()

                ]

            )

        );

    }
}