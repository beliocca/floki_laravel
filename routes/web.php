<?php
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inspiration', function () {
    return view('inspiration');
});

Route::get('/shop', 'ProductController@index');

Route::get('/profile', 'UserController@show')->middleware('auth');

Route::post('/profile', 'UserController@update');

Route::post('/admin/addproduct', 'ProductController@create');

Route::get('/shop/{category}', 'ProductController@categories');

Route::get('/product/{id}', 'ProductController@show');

Route::get('/search', 'ProductController@search');

Route::get('/shop/order/{parametro}', 'ProductController@orderByPrice');
