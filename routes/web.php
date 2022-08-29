<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomenurseController;
use App\Http\Controllers\InventairenurseController;



Route::get('/', function () {
    return view('frontend.pages.journal');
});


Route::get('/home-nurses', [HomenurseController::class, 'index'])->name('home-nurses');

Route::get('/inventaire-nurses', [InventairenurseController::class, 'index'])->name('inventaire-nurses');

Route::get('/profile', function(){
    return view('backend.pages.profilEnfant');
});
