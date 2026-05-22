<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CicloFormativoController;
use App\Http\Controllers\ProgramacionDidatcticaController;


Route::get('/', [CicloFormativoController::class, 'index']);


Route::resource('ciclosFormativos', CicloFormativoController::class);
