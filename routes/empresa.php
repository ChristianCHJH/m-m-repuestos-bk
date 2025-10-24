<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas: Empresa (API)
| Prefijo y middleware API se aplican en RouteServiceProvider
|--------------------------------------------------------------------------
*/

Route::name('empresas.')->group(function () {
    Route::get('empresas', [EmpresaController::class, 'index'])->name('index');
});

