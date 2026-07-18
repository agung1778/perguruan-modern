<?php

namespace App\Http\Controllers;


use App\Models\GalleryAlbum;



class GalleryController extends Controller
{


    public function index()
    {


        $albums = GalleryAlbum::query()

            ->with('photos')

            ->latest()

            ->paginate(12);



        return view(
            'pages.gallery.index',
            compact('albums')
        );


    }





    public function show(GalleryAlbum $album)
    {


        $album->load('photos');



        return view(
            'pages.gallery.show',
            compact('album')
        );


    }


}