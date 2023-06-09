<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewController;
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

Route::get('/', [ViewController::class, 'homePage']);
Route::get('/transaction', [ViewController::class, 'transactionPage']);
Route::get('/product', [ViewController::class, 'productPage']);
Route::post('/product', [ViewController::class, 'productPageWithCategory']);
Route::post('/buy', [ProductController::class, 'buy']);
