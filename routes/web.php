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
Route::get('/menu/edit/{id}', [MenuController::class, 'edit']);
Route::put('/menu/edit/{id}', [MenuController::class, 'update']);
Route::get('/menu/delete/{id}', [MenuController::class, 'preDelete']);
Route::delete('/menu/delete/{id}', [MenuController::class, 'destroy']);
Route::get('/menu/create', [MenuController::class, 'create']);
Route::post('/menu/create', [MenuController::class, 'store']);

Route::get('/order/{id}',[MenuController::class, 'addToOrder'] );

Route::get('/ordercard', [MenuController::class, 'getOrder']);

Route::get('/payment', [MenuController::class, 'getCheckout']);
Route::post('/payment', [MenuController::class, 'postCheckout']);

Auth::routes();

Route::get('/types', [TypeController::class, 'indextypes']);
Route::get('/types/create', [TypeController::class, 'create']);
Route::post('/types/create', [TypeController::class, 'store']);
Route::get('/types/edit/{id}', [TypeController::class, 'edit']);
Route::put('/types/edit/{id}',  [TypeController::class, 'update']);
Route::get('/types/delete/{id}', [TypeController::class, 'preDelete']);
Route::delete('/types/delete/{id}', [TypeController::class, 'destroy']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [MenuController::class, 'adminPanel'])->middleware('auth');