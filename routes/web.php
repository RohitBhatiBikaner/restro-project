<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestroController;

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/', [RestroController::class, 'index']);
route::resource('/',RestroController::class);
// // route::resource('/list',RestroController::class);
// Route::get('/list', [RestroController::class, 'list']);
// Route::get('/add','RestroController@add');
// route::resource('/add',RestroController::class);
    Route::get('/list',[RestroController::class,'list']);
    Route::get('/add',[RestroController::class,'add']);
    Route::get('/list',[RestroController::class,'list']);

