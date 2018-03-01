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

Route::group(['middleware' => ['auth']], function() {
    // your routes


Route::get('/', 'ArticlesController@index');

Route::get('fcgroningen', 'ArticlesController@fcgroningen');

Route::get('cryptovaluta', 'ArticlesController@cryptovaluta');

Route::get('trump', 'ArticlesController@trump');

Route::get('create', 'ArticlesController@create');

Route::post('article', 'ArticlesController@store');

Route::get('article/{id}', 'ArticlesController@show');

});

// Route::post('create', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
