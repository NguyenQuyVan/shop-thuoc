<?php

use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\Users\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!  
|
*/

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
// Route::get('admin/users/register', [LoginController::class, 'register'])->name('register');
Route::post('admin/users/login/store', [LoginController::class, 'store']);
 
// Đăng xuất
Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);

// Đăng ký thành viên
Route::get('register', [App\Http\Controllers\Admin\Users\RegisterController::class, 'getRegister']);

Route::get('register', 'Admin\RegisterController@getRegister');
Route::post('register', 'Admin\RegisterController@postRegister');

Route::middleware(['auth'])->group(function () {

        Route::prefix('admin')->group(function () {

                Route::get('/', [MainController::class, 'index'])->name('admin');
                Route::get('main', [MainController::class, 'index']);

                #menus
                Route::prefix('menus')->group(function () {
                        Route::get('add', [MenuController::class, 'create']);
                        Route::post('add', [MenuController::class, 'store']);
                        Route::get('list', [MenuController::class, 'index']);
                        Route::get('edit/{menu}', [MenuController::class, 'show']);
                        Route::post('edit/{menu}', [MenuController::class, 'update']);
                        Route::DELETE('destroy', [MenuController::class, 'destroy']);
                });

                #products
                Route::prefix('products')->group(function () {
                        Route::get('add', [ProductController::class, 'create']);
                        Route::post('add', [ProductController::class, 'store']);
                        Route::get('list', [ProductController::class, 'index']);
                        Route::get('edit/{product}', [ProductController::class, 'show']);
                        Route::post('edit/{product}', [ProductController::class, 'update']);
                        Route::DELETE('destroy', [ProductController::class, 'destroy']);
                });

                #Sliders
                Route::prefix('sliders')->group(function () {
                        Route::get('add', [SliderController::class, 'create']);
                        Route::post('add', [SliderController::class, 'store']);
                        Route::get('list', [SliderController::class, 'index']);
                        Route::get('edit/{slider}', [SliderController::class, 'show']);
                        Route::post('edit/{slider}', [SliderController::class, 'update']);
                        Route::DELETE('destroy', [SliderController::class, 'destroy']);
                });

                #Upload
                Route::post('upload/services', [UploadController::class, 'store']);

                #Cart
                Route::get('customers', [CartController::class, 'index']);
                Route::get('customers/view/{customer}', [\App\Http\Controllers\Admin\CartController::class, 'show']);
                Route::DELETE('destroy', [CartController::class, 'destroy']);
        });
});

Route::get('/' ,[MainController::class, 'index']);
Route::post('/services/load-product' ,[MainController::class, 'loadProduct']);

Route::get('danh-muc/{id}-{slug}.html', [App\Http\Controllers\MenuController::class, 'index']);
Route::get('san-pham/{id}-{slug}.html', [App\Http\Controllers\ProductController::class, 'index']);

Route::post('add-cart',[ App\Http\Controllers\CartController::class, 'index']);
Route::get('carts', [App\Http\Controllers\CartController::class, 'show']);
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'update']);
Route::get('carts/delete/{id}', [App\Http\Controllers\CartController::class, 'remove']);
Route::post('carts', [App\Http\Controllers\CartController::class, 'addCart']);



