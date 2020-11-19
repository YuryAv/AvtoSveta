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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::post('/getTabCars', [\App\Http\Controllers\IndexController::class, 'getTabCars']);

Route::get('/content/', [\App\Http\Controllers\PageController::class, 'index'])->name('content');
Route::get('/content/{slug}', [\App\Http\Controllers\PageController::class, 'showContentPage'])->name('content.page');

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/news/{id?}', [\App\Http\Controllers\NewsController::class, 'showNews'])->name('news.page');

Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [\App\Http\Controllers\BlogController::class, 'showBlog'])->name('blog.page');

Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services');
Route::get('/services/{slug}', [\App\Http\Controllers\ServiceController::class, 'showService'])->name('services.page');

Route::get('/stocks', [\App\Http\Controllers\StockController::class, 'index'])->name('stocks');
Route::get('/stocks/{slug}', [\App\Http\Controllers\StockController::class, 'showStock'])->name('stocks.page');

Route::get('/reviews', [\App\Http\Controllers\ReviewController::class, 'index'])->name('reviews');
Route::get('/reviews/{id}', [\App\Http\Controllers\ReviewController::class, 'showReview'])->name('reviews.page');

Route::get('/catalog/{brand?}', [\App\Http\Controllers\CatalogController::class, 'index'])->name('catalog');

Route::get('/auction/{id?}', [\App\Http\Controllers\AuctionController::class, 'index'])->name('auction');


Route::get('/cars/{id}-{name?}', [\App\Http\Controllers\CardController::class, 'index'])->name('car');

Route::post('/feedback', [\App\Http\Controllers\FeedbackController::class, 'index'])->name('feedback');

Route::get('/search', [\App\Http\Controllers\SearchController::class, 'index'])->name('search');

Route::get('/car/publish/{id}', [\App\Http\Controllers\CatalogController::class, 'publishCar'])->name('car.publish');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
