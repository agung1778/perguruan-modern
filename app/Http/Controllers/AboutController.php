<?php

namespace App\Http\Controllers;


use App\Models\WebsiteSetting;


class AboutController extends Controller
{

    public function index()
    {


        $website = WebsiteSetting::first();



        return view(
            'pages.about',
            compact('website')
        );


    }

}