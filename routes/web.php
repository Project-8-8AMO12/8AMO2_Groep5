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
Route::get('/bijenstal', "PagesController@getBijenstal");
Route::get('/contact', "PagesController@getContact");
Route::get('/contact', "ContactController@getUserAdmin");

# Backend Pages
Route::prefix('backend')->group(function () {
    Auth::routes();
    Route::get('/', 'BackendController@index');
    Route::get('/dashboard', 'BackendController@index');

    Route::get('/dashboard/CMS', 'BackendController@getCMS');
    Route::get('/dashboard/CMS/pages', 'BackendController@getCMSPages');
    Route::get('/dashboard/CMS/partials', 'BackendController@getCMSPartials');
    Route::get('/dashboard/CMS/content', 'BackendController@getCMSContent');
    Route::get('/dashboard/CMS/assets', 'BackendController@getCMSAssets');

    Route::get('/dashboard/settings', 'BackendController@getSettings');
});

