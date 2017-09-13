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

Route::get('/', 'HomeController@index');

Route::get('about', function(){
	return view('about');
});

Route::get('contact', 'ContactController@index');

Route::get('mail','MailController@index');

Route::post('sendbasicemail','MailController@basic_email');

Route::get('sendSecond','MailController@html_email');

Route::get('career', function(){
	return view('career');
});

Route::get('products', 'ProductController@index');

Route::get('products2', 'ProductController@index');

Route::get('error', function(){
	return view('error');
});