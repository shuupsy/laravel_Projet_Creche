<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomenurseController;
use App\Http\Controllers\InventairenurseController;
use App\Http\Controllers\InventaireparentsController;



Route::get('/', function () {
    return view('frontend.pages.journal');
});

Route::get('/homeNurses', [HomenurseController::class, 'index'])->name('Home');

Route::get('/InventaireNurses', [InventairenurseController::class, 'index'])->name('InventaireNurses');

Route::patch('/InventaireNurses/{id}/update', [InventairenurseController::class, 'update']);



Route::get('/InventaireParents', [InventaireparentsController::class, 'index'])->name('Inventaire');
