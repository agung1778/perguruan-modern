<?php

namespace App\Http\Controllers;


use App\Models\FoundationLeader;
use App\Models\FoundationOrganization;
use App\Models\WebsiteSetting;


class AboutController extends Controller
{

    public function index()
    {


        $website = WebsiteSetting::first();

        $leaders = FoundationLeader::query()
            ->latest()
            ->get();

        $organizations = FoundationOrganization::query()
            ->active()
            ->ordered()
            ->get();


        return view(
            'pages.about',
            compact('website', 'leaders', 'organizations')
        );


    }

}