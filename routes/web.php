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
    $app = \App\App::find(1);
    return view('frontend/main')->with(['app' => $app]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/description', 'DescriptionController@index')->name('description');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::get('/company', 'CompanyController@index')->name('company');
Route::get('/plan', 'PlanController@index')->name('plan');
Route::get('/verona', 'VeronaController@index')->name('verona');
Route::get('/advantages', 'AdvantageController@index')->name('advantages');
Route::get('/stage', 'StageController@index')->name('stage');

Route::group(['middleware' => ['admin']],function() {

});

