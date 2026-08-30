<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)
    ->name('home');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])
    ->name('sitemap');

Route::get('/tentang', [AboutController::class, 'index'])
    ->name('about');

Route::prefix('unit-pendidikan')
    ->name('units.')
    ->group(function () {
        Route::get('/', [UnitController::class, 'index'])
            ->name('index');
        Route::get('/{unit}', [UnitController::class, 'show'])
            ->name('show');
    });

Route::prefix('berita')
    ->name('news.')
    ->group(function () {
        Route::get('/', [NewsController::class, 'index'])
            ->name('index');
        Route::get('/{news}', [NewsController::class, 'show'])
            ->name('show');
    });

Route::prefix('agenda')
    ->name('agenda.')
    ->group(function () {
        Route::get('/', [AgendaController::class, 'index'])
            ->name('index');
        Route::get('/{agenda}', [AgendaController::class, 'show'])
            ->name('show');
    });

Route::prefix('galeri')
    ->name('gallery.')
    ->group(function () {
        Route::get('/', [GalleryController::class, 'index'])
            ->name('index');
        Route::get('/galeri/{album}', [GalleryController::class, 'show'])
            ->name('show');
    });

Route::get('/testimoni', [TestimonialController::class, 'index'])
    ->name('testimonials.index');

Route::get('/kontak', [ContactController::class, 'index'])
    ->name('contact');

Route::prefix('ppdb')
    ->name('ppdb.')
    ->group(function () {

        Route::get(
            '/',
            [PpdbController::class, 'index']
        )->name('index');

        Route::get(
            '/{ppdb}',
            [PpdbController::class, 'show']
        )->name('show');

    });
