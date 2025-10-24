<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;


Route::name('contactos.')->group(function () {
    Route::get('contactos', [ContactoController::class, 'index'])->name('index');
    Route::post('contactos', [ContactoController::class, 'store'])->name('store');
    Route::get('contactos/{id}', [ContactoController::class, 'show'])->name('show');
    Route::put('contactos/{id}', [ContactoController::class, 'update'])->name('update');
    Route::delete('contactos/{id}', [ContactoController::class, 'destroy'])->name('destroy');
});
