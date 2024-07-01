<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Middleware\AuthMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::middleware(AuthMiddleware::class)->group(function() {
//     Route::get('/livres', [LivreController::class, 'index'])->name('livre.index');
//     Route::get('/livre/create', [LivreController::class, 'create'])->name('livre.create');
//     Route::post('/livre', [LivreController::class, 'store'])->name('livre.store');
//     Route::get('/livre/edit/{id}', [LivreController::class, 'edit'])->name('livre.edit');
//     Route::put('/livre/{id}', [LivreController::class, 'update'])->name('livre.update');
//     Route::delete('/livre/{id}', [LivreController::class, 'destroy'])->name('livre.destroy');
// });

Route::get('/livres', [LivreController::class, 'index'])->name('livre.index');
    Route::get('/livre/create', [LivreController::class, 'create'])->name('livre.create');
    Route::post('/livre', [LivreController::class, 'store'])->name('livre.store');
    Route::get('/livre/edit/{id}', [LivreController::class, 'edit'])->name('livre.edit');
    Route::put('/livre/{id}', [LivreController::class, 'update'])->name('livre.update');
    Route::delete('/livre/{id}', [LivreController::class, 'destroy'])->name('livre.destroy');
