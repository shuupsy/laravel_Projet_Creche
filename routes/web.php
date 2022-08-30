<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomenurseController;
use App\Http\Controllers\InventairenurseController;
use App\Http\Controllers\CalendrierparentsController;
use App\Http\Controllers\InventaireparentsController;



Route::get('/', function () {
    return view('frontend.pages.journal');
});


Route::get('/InventaireNurses', [InventairenurseController::class, 'index'])->name('inventaire-nurses');

Route::patch('/InventaireNurses/{id}/update', [InventairenurseController::class, 'update']);

Route::patch('/InventaireNurses/{id}/plus', [InventairenurseController::class, 'plus']);
Route::patch('/InventaireNurses/{id}/moins', [InventairenurseController::class, 'moins']);


//route inventaire parents

Route::get('/InventaireParents', [InventaireparentsController::class, 'index'])->name('inventaire');

//route calendrier parents

Route::get('/calendrier', [CalendrierparentsController::class, 'index'])->name('calendrier');

//route HOME
Route::get('home-nurses', [HomenurseController::class, 'index'])->name('home-nurses');


//route profil Enfants (PUERI)
Route::get('/profile', function(){
    return view('backend.pages.profilEnfant');
});


//route profil Enfant show
Route::get('/kid/{id}', [HomenurseController::class, 'show']);

