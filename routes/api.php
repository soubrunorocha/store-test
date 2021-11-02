<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductBatchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SaleProductController;
use App\Http\Controllers\UserController;
use App\Models\SaleProduct;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('customers', CustomerController::class)
    ->except(['create', 'edit']);

Route::resource('products', ProductController::class)
    ->except(['create', 'edit']);

Route::resource('users', UserController::class)
    ->except(['create', 'edit']);

Route::resource('sales', SaleController::class)
    ->except(['create', 'edit']);

Route::resource('products.batches', ProductBatchController::class)
    ->except(['create', 'edit']);

Route::resource('sales.products', SaleProductController::class)
    ->except(['create', 'edit']);
