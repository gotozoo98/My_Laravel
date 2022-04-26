<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\BannerController;

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

Route::get('/', [Controller::class, 'index']);

Route::get('/test', function () {
    return view('shopping.index');
});



Route::get('/microsoft', function () {
    return view('microsoft_2');
});

Route::get('/comment', [Controller::class, 'comment']);
Route::get('/comment/save', [Controller::class, 'save_comment']);
Route::get('/comment/edit/{id}', [Controller::class, 'edit_comment']);
Route::get('/comment/update/{id}', [Controller::class, 'update_comment']);
Route::get('/comment/delete/{id}', [Controller::class, 'delete_comment']);



// Route::get('/microsoft', [NewsController::class, 'index']);

Route::get('/bootstrap', [ShoppingCartController::class, 'index']);
Route::get('/shopping1', [ShoppingCartController::class, 'step01']);
Route::get('/shopping2', [ShoppingCartController::class, 'step02']);
Route::get('/shopping3', [ShoppingCartController::class, 'step03']);
Route::get('/shopping4', [ShoppingCartController::class, 'step04']);

Route::get('/login', [Controller::class, 'login']);

Route::prefix('/banner')->group(function(){

    Route::get('/', [BannerController::class, 'index']);
    Route::get('/creat', [BannerController::class, 'creat']);
    Route::post('/store', [BannerController::class, 'store']);
    Route::get('/edit{id}', [BannerController::class, 'edit']);
    Route::post('/update{id}', [BannerController::class, 'update']);
    Route::post('/delete{id}', [BannerController::class, 'delete']);


});


