<?php

namespace App\Http\Controllers;


use App\Models\GalleryAlbum;


class GalleryController extends Controller
{


    public function index()
    {

        $albums = GalleryAlbum::query()

            ->where('is_active',true)

            ->withCount('photos')

            ->latest()

            ->paginate(12);



        return view('pages.gallery.index',[

            'albums'=>$albums

        ]);

    }





    public function show(GalleryAlbum $album)
    {


        abort_if(
            !$album->is_active,
            404
        );



        $album->load('photos');



        return view('pages.gallery.show',[

            'album'=>$album

        ]);


    }


}