<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;

Route::prefix('pessoas')->group(function () {
    Route::get('', [PessoasController::class, 'all']);
    Route::post('', [PessoasController::class, 'store']);
});