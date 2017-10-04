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

Route::get('/', 'PostController@index') ;

// publish new post
Route::post('/posts','PostController@store');

// create post 
Route::get('/posts/create' , 'PostController@create');



Route::get('/posts/{post}', 'PostController@show') ;

//  delete post
Route::post('/delete/{post}','PostController@delete');

//  update post
Route::post('/update/{post}','PostController@update');

// store updated post
Route::post('/edit/{id}','PostController@edit');


    
    






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
