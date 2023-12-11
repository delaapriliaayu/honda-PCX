<?php

use Illuminate\Support\Facades\Route;
Use App\Controller\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
Use App\Http\Controllers\PostController;

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

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/siswa/rpl/Dela', function () {
    echo '<h1 style="text-align: center"><u>Welcome to Laravel, DelaAprilia</u></h1>';
});
Route::get('/guru', function () {
    return view('guru');
});
Route::get('/siswa', function () {
    return view('siswa');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/contac', function () {
    return view('contac');
});
Route::get('/tampil',[PostController::class, 'tampil']);

Route::get('/tampil/search', [PostController::class, 'search']);

Route::get('/product', [PostController::class, 'product']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register',[AuthController::class, 'register'])->name('register');
    Route::post('/register',[AuthController::class, 'registerPost'])->name('register');
    Route::get('/login',[AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/Homelogin',[HomeController::class, 'index']);
    Route::delete('/logout',[AuthController::class, 'logout'])->name('logout');
});
