<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@getLogin');

Route::group(['middleware' => ['auth']], function () {
	Route::get('shop/create','ShopController@create');
	Route::post('shop/store','ShopController@store');
	Route::get('shop/edit/{id}','ShopController@edit');
	Route::post('shop/update/{id}','ShopController@update');
    Route::get('shop', 'ShopController@index');

});
