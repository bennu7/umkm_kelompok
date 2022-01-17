<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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

Route::get('/', [ProdukController::class, 'show']);

// Route::get('/produk/{post:slug}', [ProdukController::class, 'showsingle']);

// Route::get('/produk/{slug}', [ProdukController::class, 'showsingle']);

Route::get('/produk/{produk:slug}', [ProdukController::class, 'showsingle']);


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/men', [ProdukController::class, 'men']);
Route::get('/women', [ProdukController::class, 'women']);

// Route::get('/men', function () {
//     return view('category.men', [
//         "title" => "men"
//     ]);
// });

// Route::get('/women', function () {
//     return view('category.women', [
//         "title" => "women"
//     ]);
// });

Route::resource('/produks', ProdukController::class);
Route::get('/login', [LoginController::class, 'index']);
// untuk login action
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/profile', [UserController::class, 'profile']);
Route::post('/profile', [UserController::class, 'editProfile']);
// Route::post('/profile', [UserController::class, 'editPassword']);

Route::get('/about',  function () {
    return view('about', [
        "title" => "About"
    ]);
});
