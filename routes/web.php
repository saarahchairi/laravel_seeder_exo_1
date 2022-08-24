<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnageController;
use App\Http\Controllers\NewPersonnageController;

Route::get('/', [PersonnageController::class,'index'])->name('personnages');
Route::delete('/personnage/{id}/delete', [PersonnageController::class,'destroy']);
Route::post('/personnage/supr', [PersonnageController::class,"supression"]);

Route::get('/newPersonnage', [NewPersonnageController::class,'index'])->name('newPersonnage');
Route::post('/newPersonnage/create', [NewPersonnageController::class,'store']);

Route::get('/editPersonnage/{id}', [PersonnageController::class,'show']);
Route::put('/editPersonnage/{id}/update', [PersonnageController::class,'update']);
