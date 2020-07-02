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



Route::get('/', 'FrontendPagesController@getHome');
Route::get('/activiteiten', 'FrontendPagesController@getActiviteiten');
Route::get('/cursussen', 'FrontendPagesController@getCursussen');
Route::get('/vereniging', 'FrontendPagesController@getVereniging');
Route::get('/zwermGezien', 'FrontendPagesController@getZwermGezien');
Route::get('/lid-worden', 'FrontendPagesController@getLidWorden');
Route::get('/bijenstal', "FrontendPagesController@getBijenstal");
Route::get('/contact', "FrontendPagesController@getContact");
Route::get('/winkel', "FrontendPagesController@getWinkel");
Route::get('/agenda', "FrontendPagesController@getAgenda");
//Route::get('/contact', "ContactController@getUserAdmin");


# Backend Pages
Route::prefix('backend')->group(function () {
    Auth::routes();
    Route::get('/', 'BackendPagesController@getDashboard');
    Route::get('/dashboard', 'BackendPagesController@getDashboard');

    Route::get('/CMS', 'BackendPagesController@getCMS');

    Route::get('/CMS/pages', 'BackendPagesController@getCMSPages');
    Route::get('/CMS/pages/editPage', 'BackendPagesController@getCMSEditPage');
    Route::get('/CMS/pages/editPage{pageName}', 'BackendPagesController@getCMSEditPage');

    Route::get('/CMS/pages/editPage/addSection', 'BackendPagesController@getCMSAddSection');
    Route::get('/CMS/pages/editPage/addSection{section}', 'BackendPagesController@getCMSAddSection');
    Route::get('/CMS/pages/editPage/addSection/form', 'BackendPagesController@getCMSform');
    Route::post('/CMS/pages/editPage/addSection/form/saveNewSection', 'CMSController@saveSection');

    Route::get('/CMS/pages/editPage/deleteSection', 'CMSController@deleteSection');
    Route::get('/CMS/pages/editPage/deleteSection{delete}', 'CMSController@deleteSection');

    Route::get('/CMS/pages/editPage/editSection', 'CMSController@editSection');
    Route::get('/CMS/pages/editPage/editSection{edit}', 'CMSController@editSection');

    Route::post('/CMS/pages/editPage/editSection/updateSection', 'CMSController@updateSection');

    Route::get('/CMS/partials', 'BackendPagesController@getCMSPartials');
    Route::get('/CMS/content', 'BackendPagesController@getCMSContent');
    Route::get('/CMS/assets', 'BackendPagesController@getCMSAssets');

    Route::get('/settings', 'BackendPagesController@getSettings');

    Route::get('/settings', 'BackendPagesController@getSettings');
    Route::get('/settings/edit', 'SettingsController@editUser');

    Route::post('makeUser', 'SettingsController@makeUser');
    Route::post('settings', 'SettingsController@deleteUser');
    Route::post('settings/saveEdit', 'SettingsController@saveEdit');

    Route::post('/CMS/assets', 'AssetsController@getUpload');
    Route::get('/CMS/assets/download', 'AssetsController@getDownload');

});

