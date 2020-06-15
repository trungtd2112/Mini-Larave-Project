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

Route::group(['namespace' => 'admin'], function () {
    Route::group(['prefix' => 'login', 'middleware' => 'CheckLoggedIn'], function () {
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'CheckLoggedOut'], function () {
        Route::get('home', 'HomeController@getHome');
        
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'CategoryController@getCategories');
            Route::post('/', 'CategoryController@addCategory');
            Route::get('edit/{id}', 'CategoryController@loadViewEditCategory');
            Route::post('edit/{id}', 'CategoryController@editCategory');
            Route::get('delete/{id}', 'CategoryController@deleteCategory');
        });

        Route::group(['prefix' => 'product'], function () {
           Route::get('/', 'ProductController@getProducts'); 
           Route::get('add', 'ProductController@loadViewAddProduct'); 
           Route::post('add', 'ProductController@addProduct'); 
           Route::get('edit/{id}', 'ProductController@loadViewEditProduct'); 
           Route::post('edit/{id}', 'ProductController@editProduct'); 
           Route::get('delete/{id}', 'ProductController@deleteProduct'); 
        });

        
            
    });

    Route::get('logout', "HomeController@logout");



});
