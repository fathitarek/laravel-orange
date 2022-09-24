<?php

use Illuminate\Support\Facades\Route;

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




Route::prefix('category')->group(function () {
    Route::get('/index','CategoryController@index');
    Route::get('/add','CategoryController@create');
    Route::post('/store','CategoryController@store');
    Route::get('/show/{id}','CategoryController@show');
    Route::get('/delete/{id}','CategoryController@destroy');
    Route::get('/edit/{id}','CategoryController@edit');
    Route::post('/update','CategoryController@update');
});


Route::prefix('products')->group(function () {
    Route::get('/index','ProductController@index');
    Route::get('/add','ProductController@create');
    Route::post('/store','ProductController@store');
    Route::get('/show/{id}','ProductController@show');
    Route::get('/delete/{id}','ProductController@destroy');
    Route::get('/edit/{id}','ProductController@edit');
    Route::post('/update','ProductController@update');
});




Route::get('/read','TestController@index');
// Route::get('/category_index','CategoryController@index');
// Route::get('/category_add','CategoryController@create');
// Route::post('/category_store','CategoryController@store');
// Route::get('/category_show/{id}','CategoryController@show');
// Route::get('/category_delete/{id}','CategoryController@destroy');
// Route::get('/category_edit/{id}','CategoryController@edit');
// Route::post('/category_update','CategoryController@update');