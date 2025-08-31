<?php

use App\Http\Controllers\Site\controlleController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [controlleController::class, 'index'])->name('site.accueil');
