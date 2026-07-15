<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\UnitController;

use App\Http\Controllers\NewsController;

use App\Http\Controllers\AgendaController;

use App\Http\Controllers\GalleryController;

use App\Http\Controllers\TestimonialController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;



Route::get('/',
[HomeController::class,'index'])
->name('home');



Route::get('/tentang',
[AboutController::class,'index']);



Route::get('/unit',
[UnitController::class,'index']);



Route::get('/unit/{unit}',
[UnitController::class,'show']);



Route::get('/berita',
[NewsController::class,'index']);



Route::get('/berita/{news}',
[NewsController::class,'show']);



Route::get('/agenda',
[AgendaController::class,'index']);



Route::get('/galeri',
[GalleryController::class,'index']);



Route::get('/testimoni',
[TestimonialController::class,'index']);



Route::get('/kontak',
[ContactController::class,'index']);
