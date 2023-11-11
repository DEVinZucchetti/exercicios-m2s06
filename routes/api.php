<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;

Route::resource('pessoas', PessoasController::class)
  ->only(['index', 'show', 'store', 'update', 'destroy']);
