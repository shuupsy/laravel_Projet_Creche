<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomenurseController;



Route::get('/', function () {
    return view('frontend.pages.journal');
});

Route::get('/homeNurses', [HomenurseController::class, 'index'])->name('Home');
