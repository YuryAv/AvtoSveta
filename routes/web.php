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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/content/{slug?}', [\App\Http\Controllers\PageController::class, 'index']);

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index']);
Route::get('/news/{id?}', [\App\Http\Controllers\NewsController::class, 'showNews']);

Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index']);

Route::get('/catalog/{brand?}', [\App\Http\Controllers\CatalogController::class, 'index'])->name('catalog');

Route::get('/auction/{id?}', [\App\Http\Controllers\AuctionController::class, 'index']);

Route::get('/delivery', [\App\Http\Controllers\DeliveryController::class, 'index']);

Route::get('/discount', [\App\Http\Controllers\DiscountController::class, 'index']);

Route::get('/repairs', [\App\Http\Controllers\RepairsController::class, 'index']);

Route::get('/track', [\App\Http\Controllers\TrackController::class, 'index']);

Route::get('/cars/{id}-{name?}', [\App\Http\Controllers\CardController::class, 'index']);

Route::post('/feedback', [\App\Http\Controllers\FeedbackController::class, 'index'])->name('feedback');

Route::get('/search', [\App\Http\Controllers\SearchController::class, 'index'])->name('search');

Route::get('/car/publish/{id}', [\App\Http\Controllers\CatalogController::class, 'publishCar'])->name('car.publish');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
