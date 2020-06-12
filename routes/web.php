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
# POST
Route::post("contact", "ContactController@saveData");

# GET
Route::get('/', 'PagesController@getHome');
Route::get('/activiteiten', 'PagesController@getActiviteiten');
Route::get('/cursussen', 'PagesController@getCursussen');
Route::get('/vereniging', 'PagesController@getVereniging');
Route::get('/zwermGezien', 'PagesController@getZwermGezien');
Route::get('/lid-worden', 'PagesController@getLidWorden');
Route::get('/contact', "PagesController@getContact");
Route::get('/contact', "ContactController@getUserAdmin");

# Backend Pages
Route::prefix('backend')->group(function () {
    Auth::routes();
    Route::get('/', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@index');
});

