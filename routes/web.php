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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'index'
]);

Route::post('/submit-email', [
    'uses' => 'FormController@submitEmail',
    'as' => 'send.email'
]);

Route::get('/change-language', [
    'uses' => 'HomeController@changeLanguage',
    'as' => 'change.language'
]);
