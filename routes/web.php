<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [AboutController::class, 'index'])->name('about');

Route::get('/unit-pendidikan', [UnitController::class, 'index'])->name('units.index');
Route::get('/unit-pendidikan/{unit:slug}', [UnitController::class, 'show'])->name('units.show');

Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{news:slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('/agenda/{agenda:slug}', [AgendaController::class, 'show'])->name('agenda.show');

Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/testimoni', [TestimonialController::class, 'index'])->name('testimonials.index');

Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
