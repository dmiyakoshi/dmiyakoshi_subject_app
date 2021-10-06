<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\TeamController::class, 'index'])->name('root');

Route::resource('teams', App\Http\Controllers\TeamController::class);

Route::resource('players', App\Http\Controllers\PlayerController::class);

Route::resource('sponsers', App\Http\Controllers\SponserController::class);
