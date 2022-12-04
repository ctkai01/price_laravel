<?php

use App\Http\Controllers\PriceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
URL::forceScheme('https');
Route::get('/', [PriceController::class, 'getPrice']);
Route::get('/change', [PriceController::class, 'getPriceChange'])->name('change');
Route::post('/change', [PriceController::class, 'changePrice']);