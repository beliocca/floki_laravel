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

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/shop', 'ProductController@index');

Route::get('/search', 'ProductController@search');

Route::get('/profile', 'UserController@show')->middleware('auth');

Route::post('/profile', 'UserController@update')->middleware('auth');

Route::post('/admin/addproducts', 'ProductController@create')->middleware('auth');

Route::post('/admin/updateproduct', 'ProductController@update')->middleware('auth');

Route::get('/admin/productslist', 'ProductController@list')->middleware('auth');

Route::get('/admin/showproduct/{id}', 'ProductController@edit')->middleware('auth');;

Route::get('/admin/deletephoto/{id}','ProductPhotoController@destroy')->middleware('auth');

Route::get('/admin/deleteproduct/{id}', 'ProductController@destroy')->middleware('auth');

Route::get('/admin/categorieslist', 'CategoryController@index')->middleware('auth');

// Route::get('/admin/editcategory/{id}/{param}', 'CategoryController@edit')->middleware('auth');

Route::get('/admin/orderslist', 'OrderController@index')->middleware('auth');

Route::get('/admin/userslist', 'UserController@index')->middleware('auth');

Route::get('/admin/edituser/{id}', 'UserController@edit')->middleware('auth');

Route::get('/shop/{category}', 'ProductController@categories');

Route::get('/product/{id}', 'ProductController@show');

Route::get('/shop/order/{parametro}', 'ProductController@orderByPrice');

Route::get('/contacto', 'ContactoController@index');

Route::post('/contacto', 'ContactoController@validator');

Route::post('/addtocart', 'ProductController@addToCart');

Route::post('/editcart', 'ProductController@editCart');

Route::get('/checkout', 'ProductController@checkout');

Route::post('/borrarCartItem', 'ProductController@editCart');
