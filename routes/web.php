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

Route::get('/', 'HomeController@index')->name('home');



Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{slug}', 'BlogController@show')->name('article');
Route::get('/blog/category/{slug}', 'BlogCategoryController@index')->name('blog-category');
Route::get('/delivery', 'DeliveryController@show')->name('delivery');
Route::get('/about', 'AboutController@show')->name('about');
Route::get('/guarantee', 'GuaranteeController@show')->name('guarantee');
Route::get('/contacts', 'ContactsController@show')->name('contacts');

Route::get('/catalog', 'CatalogController@index')->name('catalog');
Route::get('/catalog/api', 'APICatalogController@index');


Route::get('/product/{id}', 'ProductController@index')->name('product');
Route::get('/product/{productId}/busket', 'BusketController@index')->name('busket');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// for email testing
// Route::get('/mailable', function () {
//     return new App\Mail\OrderEmail(
//     	App\Models\Product::all()->random(7)
//     );
// });