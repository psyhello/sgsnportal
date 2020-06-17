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


//News

Route::get('/news','PostController@index');

Route::get('/news/create','PostController@create');

Route::post('/news','PostController@store');

Route::get('/news/{news}','PostController@show');

Route::get('/news/{news}/edit', 'PostController@edit');

Route::put('/news/{news}', 'PostController@update');

Route::delete('news/{news}','PostController@destroy');


//Issues
Route::get('/issues', 'IssuesController@index')->name('issues.show');

Route::get('/issues/create', 'IssuesController@create');

Route::put('/issues/{issue}/finish','IssuesController@finish');

Route::resource('issues','IssuesController');


//Companies
Route::get('/company','CompanyController@index');

Route::get('/company/create', 'CompanyController@create');

Route::post('/company', 'CompanyController@store');

Route::get('/company/{company}','CompanyController@show');

Route::get('/company/{company}/edit','CompanyController@edit');

Route::put('/company/{company}','CompanyController@update');

//Depts

Route::resource('depts', 'DeptController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
