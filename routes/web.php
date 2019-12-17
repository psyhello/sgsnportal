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
	
    return view('welcome',[
    	'post' => App\Post::latest('id')->first()
    ]);
});

Route::get('/news','PostController@index');

Route::get('/news/create','PostController@create');

Route::post('/news','PostController@store');

Route::get('/news/{news}','PostController@show');

Route::get('/news/{news}/edit', 'PostController@edit');

Route::put('/news/{news}', 'PostController@update');

Route::get('/issues', 'IssuesController@index')->name('issues.show');

Route::get('/issues/create', 'IssuesController@create');
