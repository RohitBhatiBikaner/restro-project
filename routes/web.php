<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestroController;
use App\Http\Controllers\RestaurantController;

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

Route::get('/register', function () {
    return view('restaurant.register');
});

Route::get('/login', function () {
    return view('restaurant.login');
});

Route::resource('/restaurant', RestaurantController::class);
Route::get('list',[RestaurantController::class,'list']);
Route::get('/restaurant{id}', [RestaurantController::class, 'edit'])->name('edit');

// Route::put('/restaurant/edit', [RestaurantController::class, 'update'])->name('update');
// Route::view('restaurant.register', 'register');
Route::post('register', [RestaurantController::class, 'register'])->name('register');
Route::post('login', [RestaurantController::class, 'login'])->name('login');

// Route::get('/list{id}/delete', [RestaurantController::class, 'destroy'])->name('delete');


















