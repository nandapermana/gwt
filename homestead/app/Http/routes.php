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

Route::get('/',[
	'uses' => 'MenuController@index',
	'as'   => 'go_index',
]);

Route::get('/menu',[
	'uses' => 'MenuController@menu',
	'as'   => 'go_menu',
]);

Route::get('/tentang_kami',[
	'uses' => 'MenuController@about',
	'as'   => 'go_about',
]);

Route::get('/audit',[
	'uses' => 'MenuController@audit',
	'as'   => 'go_audit',
]);

Route::get('/struktur_organisasi',[
	'uses' => 'MenuController@organisasi',
	'as'   => 'go_organisasi',
]);

Route::get('/harga',[
	'uses' => 'MenuController@harga',
	'as'   => 'go_harga',
]);

Route::get('/client',[
	'uses' => 'MenuController@client',
	'as'   => 'go_client',
]);

Route::get('/contact',[
	'uses' => 'MenuController@kontak',
	'as'   => 'go_contact',
]);

Route::post('/post/',[
	'uses' => 'MenuController@post',
	'as'   => 'go_post',
]);