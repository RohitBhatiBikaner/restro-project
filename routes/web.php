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
// route::resource('/add',RestroController::class);
Route::get('/list', [RestroController::class, 'list']);
// Route::get('/add ','RestroController@add');
Route::get('/add', 'App\Http\Controllers\RestroController@add');
// Route::get('/list', 'App\Http\Controllers\RestroController@list');
// Route::post('/add', 'App\Http\Controllers\RestroController@add');

// route::resource('/add',RestroController::class);
    // Route::get('/add',[RestroController::class,'create']);

// route::get('/','RestroController@add');
// route::get('/','RestroController@list');
// route::get('/','RestroController@index');
// route::view('/add','add');