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


/*Route::group(['middleware' => ['web']], function () {

});*/

// Home page
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'index'
]);

// Form Submit
Route::post('/submit-email', [
    'uses' => 'FormController@submitEmail',
    'as' => 'send.email'
]);

// Change language
Route::get('/change-language', [
    'uses' => 'HomeController@changeLanguage',
    'as' => 'change.language'
]);

// get Auth page
Route::get('/login', [
    'uses' => 'HomeController@login',
    'as' => 'login'
]);

// Back to home page
Route::get('/back', [
    'uses' => 'HomeController@back',
    'as' => 'back'
]);

// Check admin
Route::post('/check-user', [
    'uses' => 'AdminController@checkUser',
    'as' => 'check.user'
]);

Route::group(['moddleware' => 'auth'], function () {

    Route::get('/admin-panel', [
        'uses' => 'AdminController@getPanel',
        'as' => 'admin.panel'
    ]);

    Route::get('/logout', [
        'uses' => 'AdminController@logout',
        'as' => 'logout'
    ]);
});
