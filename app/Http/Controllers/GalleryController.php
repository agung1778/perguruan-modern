<?php

namespace App\Http\Controllers;


use App\Models\GalleryAlbum;


class GalleryController extends Controller
{


public function index()
{


$albums =
GalleryAlbum::with('photos')
->latest()
->get();



return view(
'gallery.index',
compact('albums')
);


}

}