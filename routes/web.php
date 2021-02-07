<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myAccount\myAccountController;
use App\Http\Controllers\AboutUs\AboutUsController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\ShoppingCart\ShoppingCartController;

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

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix'=>'account'], function (){
   Route::get('/login', [myAccountController::class, 'index']);
    Route::get('/register', [myAccountController::class, 'create']);
});

Route::group(['prefix'=>'about-us'], function (){
    Route::get('/', [AboutUsController::class, 'index']);
    Route::get('/who-we-are', [AboutUsController::class, 'show']);
});

Route::group(['prefix'=>'products'], function (){
   Route::get('/', [ProductController::class, 'index']);
});

Route::group(['prefix'=>'shopping-carts'], function (){
    Route::get('/', [ShoppingCartController::class, 'index']);
});
