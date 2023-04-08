<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SinglePageController;
use App\Http\Controllers\TvShowController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/{postname}', [SinglePageController::class, 'index'])->name('post');
Route::get('/tv/{postname}', [TvShowController::class, 'index'])->name('tv');

Route::post('/ajax', [AjaxController::class, 'index'])->name('ajax');
