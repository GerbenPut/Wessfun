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

//Route::get('/', function () {
//        return view('layouts.master2');
//
//});

Route::resource('/', 'ImagesController' );


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
});

Route::get('/test', function (){
   \App\User::find(2)->assignRole('RegisteredUser');
   \App\User::find(1)->assignRole('Admin');
});

Route::get('/help', function () {
    return view('help');
});

/* CRUDS */
/* Categories */
Route::group(['middleware' => ['role:Admin']], function () {
    Route::resource('/categories', 'AdminController');
    Route::get('/categories/{Category}/edit', 'AdminController@edit');
});


/* posts */
Route::resource('/posts', 'PostsController');
Route::get('/posts/{Post}/edit', 'PostsController@edit');

/* images */
Route::resource('/images', 'ImagesController');
Route::get('/images/{Image}/edit', 'ImagesController@edit');
Route::get('/images/{Image}', 'ImagesController@show');

Route::group(['middleware' => ['role:RegisteredUser|Admin']], function () {
    Route::get('/images/create', 'ImagesController@create');
    Route::get('/create', 'ImagesController@create');
    Route::resource('/comment', 'CommentsController');
});

Route::post('/comment/search', 'CommentsController@postSearch')->middleware('auth')->name('comment.search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
