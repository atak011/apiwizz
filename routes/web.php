<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/product-detail', function () {
    return view('product-detail');
});

Route::get('/user-panel', function () {
    return view('user-panel');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/oauth/{provider}/activate', function (Request $request, $provider) {
    return Socialite::driver($provider)->redirect();
});
