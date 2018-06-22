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
Route::get('/about', 'AppController@about')->name('about');

Route::group(['middleware' => ['admin']],function() {
    Route::get('/back/description', 'DescriptionController@back');
    Route::get('/back/contact', 'ContactController@back');
    Route::get('/back/gallery', 'GalleryController@back');
    Route::get('/back/company', 'CompanyController@back');
    Route::get('/back/plan', 'PlanController@back');
    Route::get('/back/verona', 'VeronaController@back');
    Route::get('/back/advantages', 'AdvantageController@back');
    Route::get('/back/stage', 'StageController@back');

    Route::resource('benefit', 'BenefitController')->only(
        'destroy', 'store', 'update'
    );
    Route::resource('image', 'ImageController')->only(
        'destroy', 'store', 'update'
    );
    Route::resource('advantage', 'AdvantageController')->only(
        'destroy', 'store', 'update'
    );
    Route::resource('text', 'TextController')->only(
        'destroy', 'store', 'update'
    );
    Route::resource('slider', 'SliderController')->only(
        'destroy', 'store', 'update'
    );

    Route::resource('app', 'AppController')->only(
        'update', 'edit'
    );
});

