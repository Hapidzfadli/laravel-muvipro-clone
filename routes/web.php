<?php


use App\Models\SitemapPosts;
use App\Models\SitemapTvShow;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TvShowController;
use App\Http\Controllers\SinglePageController;

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

// Route::get('/sitemap.xml', function () {
//     SitemapGenerator::create('http://localhost:8000')->writeToFile(public_path('sitemap.xml'));

//     return response()->view('sitemap');
// });

// Route::get('/sitemap-posts.xml', function () {
//     return response()->sitemap(SitemapPosts::create());
// });

// Route::get('/sitemap-pages.xml', function () {
//     return response()->sitemap(SitemapTvShow::create());
// });
