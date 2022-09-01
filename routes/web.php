<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomenurseController;
use App\Http\Controllers\CalendriernurseController;
use App\Http\Controllers\InventairenurseController;
use App\Http\Controllers\CalendrierparentsController;
use App\Http\Controllers\InventaireparentsController;
use App\Http\Controllers\ProfilenfantparentsController;



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

//route calendrier nurse

Route::get('/calendrierNurses', [CalendriernurseController::class, 'index'])->name('calendrier-nurses');

//route HOME
Route::get('home-nurses', [HomenurseController::class, 'index'])->name('home-nurses');


//route profil Enfants (PUERI)
Route::get('/profile', function(){
    return view('backend.pages.profilEnfant');
});


//route profil Enfant show
Route::get('/kid/{id}', [HomenurseController::class, 'show']);

Route::put("/kid/{id}/updatehoursmatin", [HomenurseController::class,"updatematin"]);
Route::put("/kid/{id}/updatehourssoir", [HomenurseController::class,"updatesoir"]);
Route::put("/kid/{id}/updatehumeur", [HomenurseController::class,"updatehumeur"]);
Route::put("/kid/{id}/updateactivite", [HomenurseController::class,"updateactivite"]);
Route::put("/kid/{id}/updatesommeil", [HomenurseController::class,"updatesommeil"]);
Route::put("/kid/{id}/updaterepas", [HomenurseController::class,"updaterepas"]);
Route::put("/kid/{id}/updatepoo", [HomenurseController::class,"plus"]);
Route::put("/kid/{id}/updatechange", [HomenurseController::class,"updatechange"]);
Route::put("/kid/{id}/updateaccident", [HomenurseController::class,"updateaccident"]);




//Route profil Enfant Parent
Route::get('/ProfilEnfant', [ProfilenfantparentsController::class, 'index'])->name('ProfilEnfant');
