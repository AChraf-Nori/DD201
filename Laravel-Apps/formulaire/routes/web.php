<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/add-stagiaire', function () {
//     return view('add_stagiaire');
// });


Route::get('/', [StagiaireController::class, 'index'])->name('stagiaire.index');
Route::get('/stagiaire/create', [StagiaireController::class, 'create'])->name('stagiaire.create');
Route::post('/stagiaire/store', [StagiaireController::class, 'store'])->name('stagiaire.store');
Route::delete('/stagiaire/{id}', [StagiaireController::class, 'destroy'])->name('stagiaire.destroy');