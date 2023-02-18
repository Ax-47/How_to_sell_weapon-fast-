<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Maket;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product/{id}', function ($id) {
    return view('welcome');
});
Route::get('/user/{id}', function ($id) {
    return view('welcome');
});


// product
Route::post('/product', [ProductController::class,'CreateProduct'])->middleware("auth");
Route::get('/product', [ProductController::class,'CreateProductView']);
Route::get('/product/{id?}', [ProductController::class,'ProductView']);
Route::put('/product/{id}/edit')->middleware("auth");
Route::delete('/product/{id}/delete')->middleware("auth");
// Auth
Route::post('/register', [UsersController::class,'CreateUser']);
Route::get('/register', [UsersController::class,'CreateUserView']);
Route::post('/login', [UsersController::class,'Login']);
Route::get('/login', [UsersController::class,'LoginView'])->name('login');
Route::get('/profile/{id?}', [UsersController::class,'GetProfile']);
Route::put('/profile/edit')->middleware("auth");
Route::delete('/profile/delete')->middleware("auth");
// maket 
Route::get('/maket',[Maket::class,'MaketView']);