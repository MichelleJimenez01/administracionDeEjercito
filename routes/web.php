<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArmyCorpController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\QuarterController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para ArmyCorp
Route::get('/formularioArmyCorp', [ArmyCorpController::class, 'create']);
Route::post('/crearArmyCorp', [ArmyCorpController::class, 'store'])->name('armycorps.store');

// Rutas para Company
Route::get('/formularioCompany', [CompanyController::class, 'create']);
Route::post('/crearCompany', [CompanyController::class, 'store'])->name('companies.store');

// Rutas para Quarter
Route::get('/formularioQuarter', [QuarterController::class, 'create']);
Route::post('/crearQuarter', [QuarterController::class, 'store'])->name('quarters.store');