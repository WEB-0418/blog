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



Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{slug}', 'BlogController@show')->name('article');
Route::get('/blog/category/{slug}', 'BlogCategoryController@index')->name('blog-category');
Route::get('/delivery', 'DeliveryController@show');
Route::get('/about', 'AboutController@show');
Route::get('/guarantee', 'GuaranteeController@show');
Route::get('/contacts', 'ContactsController@show');

