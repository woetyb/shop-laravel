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

Route::get('/', 'Store\HomeController@index')->name('store.home')->middleware('verified');;
Route::get('/product/{id}', 'Store\ProductController@detail')->name('store.detail_product');
Route::get('/category/{id}', 'Store\CategoryController@index')->name('store.category');
Route::get('/cart/add/{id}', 'Store\CartController@add')->name('store.add_to_cart');
Route::get('/cart/remove/{id}', 'Store\CartController@remove')->name('store.remove_from_cart');

// Cart route
Route::get('/cart', 'Store\CartController@index')->name('store.view_cart');
Route::get('/cart/add/{product_id}', 'Store\CartController@add')->name('store.add_to_cart');
Route::get('/cart/delete/{product_id}', 'Store\CartController@delete')->name('store.delete_from_cart');
Route::get('/cart/update/{product_id}/{quantity}', 'Store\CartController@update')->name('store.update_cart');
Route::post('/cart/update', 'Store\CartController@update')->name('store.update_cart_post');

Route::post('/order/place', 'Store\OrderController@add')->name('store.place_order');


Route::group(['prefix' => 'admin', 'middleware' =>['auth','verified'] ], function () {

    Route::get('/', 'Admin\HomeController@index')->name('admin');
    Route::get('/product', 'Admin\ProductController@index')->name('admin.list_product')->middleware('can:view, App\Model\Product');
    Route::get('/product/add', 'Admin\ProductController@add')->name('admin.add_product')->middleware('can:create, App\Model\Product');
    Route::post('/product/add', 'Admin\ProductController@add')->name('admin.add_product_post')->middleware('can:create, App\Model\Product');

//    Route::get('/product', 'Admin\ProductController@index')->name('admin.list_product');
//    Route::get('/product/add', 'Admin\ProductController@add')->name('admin.add_product');
//    Route::post('/product/add', 'Admin\ProductController@add')->name('admin.add_product_post');

    Route::get('/product/update/{id}', 'Admin\ProductController@update')->name('admin.update_product_get');
    Route::post('/product/update', 'Admin\ProductController@update')->name('admin.update_product_post');
    Route::get('/product/delete/{id}', 'Admin\ProductController@delete')->name('admin.delete_product');
    Route::get('/category', 'Admin\CategoryController@index')->name('admin.list_category');
    Route::post('/category/add', 'Admin\CategoryController@add')->name('admin.add_category');
    Route::post('/category/update', 'Admin\CategoryController@update')->name('admin.update_category_post');
    Route::get('/category/update/{id}', 'Admin\CategoryController@update')->name('admin.update_category_get');
    Route::get('/category/delete/{id}', 'Admin\CategoryController@delete')->name('admin.delete_category');
});

Route::post('upload', 'FileController@upload')->name('file.upload');


Auth::routes(['verify' => true]);

Route::get('/logout', function (){
    Auth::logout();
    return redirect()->route('admin');
});


Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');