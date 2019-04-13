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
})->name('home');



Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{slug}', 'BlogController@show')->name('article');
Route::get('/blog/category/{slug}', 'BlogCategoryController@index')->name('blog-category');
Route::get('/delivery', 'DeliveryController@show')->name('delivery');
Route::get('/about', 'AboutController@show')->name('about');
Route::get('/guarantee', 'GuaranteeController@show')->name('guarantee');
Route::get('/contacts', 'ContactsController@show')->name('contacts');

Route::get('/catalog', 'CatalogController@index')->name('catalog');


