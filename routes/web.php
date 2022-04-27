<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShoppingCartController;

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;


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

// Route::get('/test', function () {
//     return view('shopping.index');
// });

// Route::get('/say', function () {
//     return 'Hello world!';
// });

Route::get('/comment', [Controller::class, 'comment']);
Route::post('/comment/hahahahaha', [Controller::class, 'save_comment']);

Route::get('/comment/edit/{id}', [Controller::class, 'edit_comment']);
Route::get('/comment/update/{id}', [Controller::class, 'update_comment']);

Route::get('/comment/delete/{id}', [Controller::class, 'delete_comment']);


Route::get('/shopping1', [ShoppingCartController::class, 'step01']);
Route::get('/shopping2', [ShoppingCartController::class, 'step02']);
Route::get('/shopping3', [ShoppingCartController::class, 'step03']);
Route::get('/shopping4', [ShoppingCartController::class, 'step04']);

Route::get('/login', [Controller::class, 'login']);

//BANNER管理相關頁面  手工建立版本 (諄照resful API 的規定)
// Route::get('/banner', [BannerController::class, 'index']); //總表,列表頁
// Route::post('/banner', [BannerController::class, 'store']); //儲存
// Route::get('/banner/create', [BannerController::class, 'create']); //新增頁
// Route::get('/banner/{id}', [BannerController::class, 'show']); //單筆檢視頁
// Route::post('/banner/{id}', [BannerController::class, 'edit']); //編輯頁
// Route::patch('/banner/{id}', [BannerController::class, 'update']); //更新
// Route::delete('/banner/{id}', [BannerController::class, 'destroy']); //刪除

//以下一行底七行

// Route::resource('banner', BannerController::class);


// 部分參考resful API 個人習慣的寫法

Route::prefix('/banner')->group(function () { // BANNER管理相關路由
    Route::get('/', [BannerController::class, 'index']); //總表,列表頁 = Read

    Route::get('/create', [BannerController::class, 'create']); //新增頁 C
    Route::post('/store', [BannerController::class, 'store']); //儲存 C

    Route::get('/edit/{id}', [BannerController::class, 'edit']); //編輯頁 U
    Route::post('/update/{id}', [BannerController::class, 'update']); //更新  U

    Route::delete('/delete/{id}', [BannerController::class, 'destroy']); //刪除 D
});

Route::prefix('/product')->group(function () { // 商品管理相關路由
    Route::get('/', [ProductController::class, 'index']); //總表,列表頁 = Read

    Route::get('/create', [ProductController::class, 'create']); //新增頁 C
    Route::post('/store', [ProductController::class, 'store']); //儲存 C

    Route::get('/edit/{id}', [ProductController::class, 'edit']); //編輯頁 U
    Route::post('/update/{id}', [ProductController::class, 'update']); //更新  U

    Route::delete('/delete/{id}', [ProductController::class, 'destroy']); //刪除 D
});


