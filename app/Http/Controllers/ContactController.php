<?php

namespace App\Http\Controllers;

use App\Models\WebsiteSetting;

class ContactController extends Controller
{

    public function index()
    {

        $setting = WebsiteSetting::first();


        return view(
            'pages.contact',
            compact('setting')
        );

    }

}