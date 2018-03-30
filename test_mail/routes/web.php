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

Route::get('send','MailController@send_form');

//Route::get('/', function () {
//    return view('form');
//});

Route::post('send-mail','MailController@send_form');

Route::get('FirstLogin','TestController@test')->name('FirstLogin');

Route::get('/email/confirmation/{token}', 'TestController@confirm')->name('email.confirmation');

//Route::post('register', 'Auth\RegisterController@register');
Route::get('verify', 'Test@register')->name('verify');
