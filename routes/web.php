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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
});

Route::get('/test', function (){
   \App\User::find(2)->assignRole('RegisteredUser');
   \App\User::find(1)->assignRole('Admin');
});

/* CRUDS */

Route::resource('/categories', 'CategoriesController');

Route::get('/categories/{Categorie}/edit', 'CategoriesController@edit');

Route::get('/help', function () {
    return view('help');
});

Route::resource('/comment', 'CommentsController');

Route::get('/comment/{comment}/create', 'CommentsController@create');

Route::get('comment/{comment}/edit', 'CommentsController@edit');


