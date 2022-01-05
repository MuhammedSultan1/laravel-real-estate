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


Route::get('/forSale', 'App\Http\Controllers\ListingsController@forSale')->name('for_sale');

Route::get('/forSale/{property}', 'App\Http\Controllers\ListingsController@show')->name('forSale.show');

Route::get('/forRent', 'App\Http\Controllers\ListingsController@forRent')->name('forRent');

Route::get('/forRent/{property}', 'App\Http\Controllers\ListingsController@show')->name('forRent.show');