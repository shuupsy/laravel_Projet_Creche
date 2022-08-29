<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomenurseController;
use App\Http\Controllers\InventairenurseController;



Route::get('/', function () {
    return view('frontend.pages.journal');
});

Route::get('/homeNurses', [HomenurseController::class, 'index'])->name('Home');

Route::get('/InventaireNurses', [InventairenurseController::class, 'index'])->name('InventaireNurses');
