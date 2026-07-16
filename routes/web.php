<?php

use Illuminate\Support\Facades\Route;

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
| Public Website Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// About
Route::controller(AboutController::class)->group(function () {
    Route::get('/tentang', 'index')
        ->name('about');
});

// Education Units
Route::prefix('unit-pendidikan')
    ->name('units.')
    ->controller(UnitController::class)
    ->group(function () {

        Route::get('/', 'index')
            ->name('index');

        Route::get('/{unit:slug}', 'show')
            ->name('show');
    });

// News
Route::prefix('berita')
    ->name('news.')
    ->controller(NewsController::class)
    ->group(function () {

        Route::get('/', 'index')
            ->name('index');

        Route::get('/{news:slug}', 'show')
            ->name('show');
    });

// Agenda
Route::prefix('agenda')
    ->name('agenda.')
    ->controller(AgendaController::class)
    ->group(function () {

        Route::get('/', 'index')
            ->name('index');

        Route::get('/{agenda:slug}', 'show')
            ->name('show');
    });

// Gallery
Route::prefix('galeri')
    ->name('gallery.')
    ->controller(GalleryController::class)
    ->group(function () {

        Route::get('/', 'index')
            ->name('index');

        Route::get('/{album:slug}', 'show')
            ->name('show');
    });

// Testimonials
Route::controller(TestimonialController::class)->group(function () {

    Route::get('/testimoni', 'index')
        ->name('testimonials.index');
});

// Contact
Route::controller(ContactController::class)->group(function () {

    Route::get('/kontak', 'index')
        ->name('contact');
});