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

Route::get('/login_admin', function () {
    return view('welcome');
});

Route::auth();

Route::get('/','ClientController@public_home');

Route::get('/home', 'HomeController@index');


Route::get('home_admin','AdminController@home');

Route::get('new_post','AdminController@new_post');

Route::post('insert_post','AdminController@insertNewPost');

Route::post('caridesa','AdminController@caridesa');

Route::get('caridesa','AdminController@caridesa');

Route::get('editPost','AdminController@editPost');

Route::post('saveEditPost','AdminController@saveEditPost');

Route::get('editPict/','AdminController@editPict');

Route::get('delete_img','AdminController@deleteImg');

Route::get('delete_post/{id}', 'AdminController@deletePost');

Route::get('search_post','ClientController@search');