<?php

use App\Http\Controllers\AcceuilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LieusController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::resource('acceuil', AcceuilController::class)->only(['index']);
Route::get('/Acceuil', [AcceuilController::class, 'index'])->name('Acceuil.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
    Route::get('/lieus', [LieusController::class, 'index'])->name('lieus.index');
    Route::get('/lieus/create', [LieusController::class, 'create'])->name('lieus.create');
    Route::post('/lieus', [LieusController::class, 'store'])->name('lieus.store');
    Route::get('/lieus/{id}', [LieusController::class, 'show'])->name('lieus.show');
// Ajoutez d'autres routes selon les besoins


require __DIR__.'/auth.php';
