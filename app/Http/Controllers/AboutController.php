<?php

namespace App\Http\Controllers;


use App\Models\FoundationLeader;

use App\Models\FoundationOrganization;



class AboutController extends Controller
{


public function index()
{


return view('about',[


'leader'=>

FoundationLeader::where(
'is_active',
true
)
->first(),



'organizations'=>

FoundationOrganization::where(
'is_active',
true
)
->orderBy('order')
->get()


]);


}


}