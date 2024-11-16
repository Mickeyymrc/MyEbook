<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;



Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified','normal'])
    ->name('dashboard');

Route::view('admin', 'admin')
    ->middleware(['auth', 'verified','admin'])
    ->name('admin');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('form', [LivreController::class, 'create'])->name('form');


Route::post('livres', [LivreController::class, 'store'])->name('livres.store');

Route::get('utilisateur',[LivreController::class, 'util'])->name('utilisateurs');

Route::get('showBooks',[LivreController::class, 'voirLivre'])->name('livre');

Route::get('/download/{id}', [LivreController::class, 'download'])->name('livre.download');

Route::delete('/livres/{id}', [LivreController::class, 'destroy'])->name('livres.destroy');

Route::get('/users', [LivreController::class, 'index'])->name('users.index');

Route::put('/users/{id}', [LivreController::class, 'update'])->name('users.update');


Route::get('/livres/romance', [LivreController::class, 'voirLivresRomance'])->name('livres.romance');


Route::get('/livres/fantaisie', [LivreController::class, 'voirLivresFantaisie'])->name('livres.fantaisie');

Route::get('/livres/science', [LivreController::class, 'voirLivresScience'])->name('livres.science');






require __DIR__.'/auth.php';
