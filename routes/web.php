<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Controllers
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;



/*
|--------------------------------------------------------------------------
| Homepage
|--------------------------------------------------------------------------
*/

Route::get('/', HomeController::class)
    ->name('home');



/*
|--------------------------------------------------------------------------
| About / Tentang Perguruan
|--------------------------------------------------------------------------
*/

Route::get('/tentang', [AboutController::class, 'index'])
    ->name('about');



/*
|--------------------------------------------------------------------------
| Education Units
|--------------------------------------------------------------------------
*/

Route::prefix('unit-pendidikan')
    ->name('units.')
    ->group(function () {


        Route::get('/', [UnitController::class, 'index'])
            ->name('index');


        Route::get('/{unit}', [UnitController::class, 'show'])
            ->name('show');

    });




/*
|--------------------------------------------------------------------------
| News
|--------------------------------------------------------------------------
*/

Route::prefix('berita')
    ->name('news.')
    ->group(function () {


        Route::get('/', [NewsController::class, 'index'])
            ->name('index');


        Route::get('/{news}', [NewsController::class, 'show'])
            ->name('show');


    });





/*
|--------------------------------------------------------------------------
| Agenda
|--------------------------------------------------------------------------
*/

Route::prefix('agenda')
    ->name('agenda.')
    ->group(function () {

        Route::get('/', [AgendaController::class, 'index'])
            ->name('index');

        Route::get('/{agenda}', [AgendaController::class, 'show'])
            ->name('show');

    });





/*
|--------------------------------------------------------------------------
| Gallery
|--------------------------------------------------------------------------
*/

Route::prefix('galeri')
    ->name('gallery.')
    ->group(function () {


        Route::get('/', [GalleryController::class, 'index'])
            ->name('index');


        Route::get('/galeri/{album}', [GalleryController::class, 'show'])
            ->name('show');


    });





/*
|--------------------------------------------------------------------------
| Testimonials
|--------------------------------------------------------------------------
*/

Route::get('/testimoni', [TestimonialController::class, 'index'])
    ->name('testimonials.index');





/*
|--------------------------------------------------------------------------
| Contact
|--------------------------------------------------------------------------
*/

Route::get('/kontak', [ContactController::class, 'index'])
    ->name('contact');





/*
|--------------------------------------------------------------------------
| Optional sitemap
|--------------------------------------------------------------------------
*/

Route::get('/sitemap.xml', function () {

    return response()
        ->view('sitemap')
        ->header('Content-Type', 'text/xml');

});