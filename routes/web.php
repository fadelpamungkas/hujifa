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
Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/about', 'HomeController@about');
Route::get('/rating', 'HomeController@rating');
Route::get('/forms', 'HomeController@forms');
Route::get('/pengelolaprofile', 'HomeController@pengelolaprofile');
Route::get('/userprofile', 'HomeController@userprofile');
Route::get('/portfolio', 'HomeController@portfolio');
Route::get('/portfolio-single', 'HomeController@single');
Route::get('/portfolio/delete/{id}', 'HomeController@delete');
Route::post('/notification','HomeController@notification');
Route::post('/notification1','HomeController@notification1');

Route::post('/daftar', 'HomeController@daftar');
