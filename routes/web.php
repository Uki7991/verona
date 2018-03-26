<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'IndexController@contact')->name('contact');
Route::get('/company', 'IndexController@company')->name('company');
Route::get('/plan', 'IndexController@plan')->name('plan');
Route::get('/verona', 'IndexController@verona')->name('verona');
Route::get('/advantages', 'IndexController@advantages')->name('advantages');
Route::get('/building', 'IndexController@building')->name('building');

