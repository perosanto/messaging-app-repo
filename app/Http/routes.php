<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
//
//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

Route::resource('receivers', 'ReceiversController');
//Route::resource('messages', 'MessagesController');    //I don't want it to be top level uri

Route::resource('receivers.messages', 'MessagesController');    //because I want messages to be nested under receivers, for example receovers/1/messages/1
