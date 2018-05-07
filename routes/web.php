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

use Illuminate\Support\Facades\Artisan;

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

Route::get('/caravan/{id}', [
    'uses' => 'HomeController@getCaravanDetail',
    'as' => 'caravan.detail'
]);

Route::group(['middleware' => 'auth'], function () {

    // Get admin panel
    Route::get('/admin-panel', [
        'uses' => 'AdminController@getPanel',
        'as' => 'admin.panel'
    ]);

    Route::get('/services-panel', [
        'uses' => 'AdminController@getServicePanel',
        'as' => 'services.panel'
    ]);

    Route::get('/service-delete/{id}', [
        'uses' => 'AdminController@deleteService',
        'as' => 'delete.service'
    ]);

    Route::post('/add-service', [
        'uses' => 'AdminController@addService',
        'as' => 'add.service'
    ]);

    Route::get('message-panel', [
        'uses' => 'AdminController@getMessagePanel',
        'as' => 'message.panel'
    ]);

    Route::get('change-state/{id}', [
        'uses' => 'AdminController@changeState',
        'as' => 'change.state'
    ]);

    // Logout
    Route::get('/logout', [
        'uses' => 'AdminController@logout',
        'as' => 'logout'
    ]);

    // Add Caravana
    Route::post('/add-caravana', [
        'uses' => 'AdminController@addCaravana',
        'as' => 'add.caravana'
    ]);

    // Delete Caravana
    Route::get('/delete-caravana/{id}', [
        'uses' => 'AdminController@deleteCaravana',
        'as' => 'delete.caravana'
    ]);
});

Route::get('/migration', function () {
    Artisan::call('storage:link');
});
