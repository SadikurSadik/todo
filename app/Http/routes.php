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

/*Web Related Route*/
Route::get('/',['as'=>'home', 'uses'=>'PagesController@home']);
Route::get('/about',['as'=>'about', 'uses'=>'PagesController@about']);
Route::get('/contact',['as'=>'contact', 'uses'=>'PagesController@contact']);
Route::get('/login',['as'=>'login', 'uses'=>'PagesController@login']);
Route::post('/post-login', ['as'=>'post-login', 'uses'=>'PagesController@postLogin']);
Route::post('/member/store',['as'=>'register-memeber','uses'=>'MembersController@store']);
Route::post('/member/login', ['as'=>'member-login', 'uses'=>'MembersController@login']);
/*End of Web Related Route*/
