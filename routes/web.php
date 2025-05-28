<?php

use Illuminate\Support\Facades\Route;
use App\Constants\RouteNames;
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {return view('welcome');});
 Route::get('/', [HomeController::class, 'index'])->name(RouteNames::HOME_INDEX);