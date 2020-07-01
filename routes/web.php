<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', 'HomeController@index');

Route::get('/login', 'HomeController@login');
Route::get('/cart', 'HomeController@cart');
Route::get('/checkout', 'HomeController@checkout');
Route::get('/widgets', 'HomeController@widgets');
Route::get('/loggedin', 'HomeController@loggedin');
Route::get('/portofolio', 'HomeController@portofolio');
Route::get('/demo-course', 'HomeController@demo_course');
