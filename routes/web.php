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
Route::get('/','FrontendController@home')->name('homepage');
Route::get('filteritem','FrontendController@items')->name('itempage');
Route::get('detail/{id}','FrontendController@detail')->name('detailpage');
// Route::get('register','FrontendController@register')->name('registerpage');
// Route::get('login','FrontendController@login')->name('loginpage');
Route::get('checkout','FrontendController@checkout')->name('checkoutpage');
Route::get('profile','FrontendController@profile')->name('profilepage');

// backend

Route::middleware('auth')->group(function () {
Route::resource('orders','OrderController');

Route::get('dashboard','BackendController@dashboard')->name('dashboard'); 
    // return view('welcome');
    // return 'Hello Laravel';
Route::resource('items','ItemController');
// 7 (get:4/ post:1/ put:1 /delete:1)
Route::resource('brands','BrandController');

Route::resource('categories','CategoryController');

Route::resource('subcategories','SubcategoryController');
});
// end backend
    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
