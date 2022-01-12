<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
Route::get('/produk/{slug}', [ProdukController::class, 'showsingle']);

Route::get('/profile', function () {
    return view('profile');
});

Route::get('men', function () {
    return view('men', [
        "title" => "men"
    ]);
});

Route::get('wome', function () {
    return view('women', [
        "title" => "women"
    ]);
});

Route::resource('/produks', ProdukController::class);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);
