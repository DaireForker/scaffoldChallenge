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

	Auth::routes();
    Route::get('/', 'ProductsController@show');
    // Route::post('/singleProduct', 'singleProductController@show')->name('singleProduct');
    Route::get('/singleProduct/{id}', 'singleProductController@show');
    Route::post('/AjaxPageUpdate', 'ProductsController@AjaxPageUpdate');
    Route::post('/AjaxSearch', 'ProductsController@AjaxSearch');
    Route::post('FilterHandler', 'ProductsController@FilterHandler')->name('FilterHandler');

    
    