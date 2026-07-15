<?php

namespace App\Http\Controllers;


use App\Models\FoundationLeader;
use App\Models\FoundationOrganization;
use App\Models\WebsiteSetting;


class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about',[
        'website'=>WebsiteSetting::first(),
        'leader'=>
        FoundationLeader::where('is_active',true)
        ->first(),
        'organizations'=>
        FoundationOrganization::where('is_active',true)
        ->orderBy('order')
        ->get(),
        ]);
    }
}