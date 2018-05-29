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

Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
});
/* test has to be runned once after migrating and seeding */
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
    Route::get('/categories/{Categorie}/edit', 'AdminController@edit');
});

/* comments */
Route::resource('/comment', 'CommentsController');
Route::get('/comment/{comment}/create', 'CommentsController@create');
Route::get('comment/{comment}/edit', 'CommentsController@edit');


