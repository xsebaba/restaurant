<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

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
    return view('welcome');
});


Route::get('/menu', [TypeController::class, 'index']);

Route::get('/order/{id}',[MenuController::class, 'addToOrder'] );

Route::get('/ordercard', [MenuController::class, 'getOrder']);

Route::get('/payment', [MenuController::class, 'getCheckout']);
Route::post('/payment', [MenuController::class, 'postCheckout']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
