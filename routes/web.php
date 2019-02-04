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


Route::get('/','CreatesController@home');

Route::get('/create',function(){
	return view('create');
});
Route::get('/dashboard','CreatesController@dashboard');

Route::get('/login','CreatesController@login');

Route::get('/signin',function(){

	return view('login');
});

Route::get('/register','CreatesController@register'
);

Route::post('/insert','CreatesController@add');
Route::get('/update/{Id}','CreatesController@update');
Route::post('/edit/{Id}','CreatesController@edit');
Route::get('/read/{Id}','CreatesController@read');
Route::get('/delete/{Id}','CreatesController@delete');



