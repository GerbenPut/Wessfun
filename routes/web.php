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

Route::resource('/', 'ImagesController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('/admin', function () {
        return view('layouts.admin');
    });
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
    Route::resource('/categories', 'CategoryController')->except('show');;
    Route::get('/categories/{Category}/edit', 'CategoryController@edit');
});
Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');

Route::resource('/tags', 'TagsController');
Route::get('/tags/{Tag}/edit', 'TagsController@edit');
Route::group(['middleware' => ['role:Admin']], function () {
    Route::resource('/advertisements', 'AdvertisementsController');
    Route::get('/advertisements/{Advertisement}/edit', 'AdvertisementsController@edit');
});

/* posts */
Route::resource('/posts', 'PostsController');
Route::get('/posts/{Post}/edit', 'PostsController@edit');

/* images */
Route::resource('/images', 'ImagesController');
Route::get('/images/{Image}/edit', 'ImagesController@edit');
Route::get('/images/{Image}', 'ImagesController@show');

/* Merch */
Route::resource('/merch', 'MerchController');
Route::get('/merch/{merch}/edit', 'MerchController@edit');
Route::get('/merch/{merch}', 'MerchController@show');


Route::group(['middleware' => ['role:RegisteredUser|Admin']], function () {
    Route::get('/images/create', 'ImagesController@create');
    Route::get('/create', 'ImagesController@create');
    Route::resource('/comment', 'CommentsController');
});

Route::post('/comment/search', 'CommentsController@postSearch')->middleware('auth')->name('comment.search');


Route::post('/tags/search', 'TagsController@postSearch')->middleware('auth')->name('tags.index');