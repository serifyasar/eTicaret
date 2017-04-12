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


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::resource('/cart', 'CartController');
Route::resource('address', 'AddressController');

Route::get('/productdetail/{id}', 'HomeController@productdetail')->name('detail');
Route::get('/products/{id}', 'HomeController@products');
Route::get('/login', 'HomeController@login');
Route::get('/checkout', 'CheckoutController@step1')->name('checkout');
Route::get('payment', 'CheckoutController@payment')->name('payment');

Auth::routes();



Route::group(['prefix'=> 'admin','middleware'=>['auth','admin']], function (){
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/slider', 'AdminController@slider')->name('admin.slider');
    Route::resource('category','CategoriesController');
    Route::resource('subcategory','SubCategoriesController');
    Route::resource('product','ProductsController');
    Route::resource('block','BlocksController');


    Route::post('saveSlider', 'AdminController@store')->name('saveSlider');
    Route::post('deleteSlider/{id}', 'AdminController@deleteSlider')->name('deleteSlider');

});
