<?php


use App\Models\SitemapPosts;
use App\Models\SitemapTvShow;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TvShowController;
use App\Http\Controllers\SinglePageController;
use App\Http\Controllers\YearController;
use App\Models\Category;
use App\Models\Country;
use App\Models\Year;

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

Route::get("/page/search", [SearchController::class, 'index'])->name('search');

Route::get("/category/{category}", [CategoryController::class, 'index'])->name('category');
Route::get("/year/{year}", [YearController::class, 'index'])->name('year');
Route::get("/country/{country}", [CountryController::class, 'index'])->name('country');
