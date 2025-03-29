<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingPageController;


Route::get('/', [LandingPageController::class, 'index'])->name('home');

Route::get('/root', [LandingPageController::class, 'home_page'])->name('homepage');

Route::post('/send', [LandingPageController::class, 'handle_msg'])->name('send');