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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index']);
Route::get('/news/{id?}', [\App\Http\Controllers\NewsController::class, 'showNews']);

Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index']);

Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, 'index']);

Route::get('/delivery', [\App\Http\Controllers\DeliveryController::class, 'index']);

Route::get('/discount', [\App\Http\Controllers\DiscountController::class, 'index']);

Route::get('/repairs', [\App\Http\Controllers\RepairsController::class, 'index']);

Route::get('/track', [\App\Http\Controllers\TrackController::class, 'index']);

Route::get('/cards/1', [\App\Http\Controllers\CardController::class, 'index']);

Route::post('/feedback', [\App\Http\Controllers\FeedbackController::class, 'index'])->name('feedback');

Route::get('/testi', function () {
    echo menu('main', 'main_menu');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
