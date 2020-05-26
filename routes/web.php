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

# Default
Route::get('/', 'PagesController@getHome');

# Standard Pages
Route::get('/home', 'PagesController@getHome');
Route::get('/activiteiten', 'PagesController@getActiviteiten');
Route::get('/cursussen', 'PagesController@getCursussen');
Route::get('/vereniging', 'PagesController@getVereniging');
Route::get('/zwermGezien', 'PagesController@getZwermGezien');
Route::get('/lid-worden', 'PagesController@getLidWorden');


# Backend Pages
Route::prefix('backend')->group(function () {
    Auth::routes();
    Route::get('/', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@index');
});
