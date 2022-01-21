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

//Route::post('/forSale/{postal}', 'App\Http\Controllers\ListingsController@forSale')->name('sale');
Route::post('/forSale', 'App\Http\Controllers\ListingsController@forSale')->name('forSale');

//Route::post('/forSale/{postal}', 'App\Http\Controllers\ListingsController@forSale')->name('forSale');

// Route::get('/forSale/{postal}', function () {
//     return view('forSale', ['postal' => $postal]);
// });
    //return view('forSale/{postal}', ['postal' => $postal]);

//Route::post('/forSale/{postal}', 'App\Http\Controllers\ListingsController@forSale')->name('forSale/{postal}');


Route::get('/forSale/{property}', 'App\Http\Controllers\ListingsController@show')->name('forSale.show');

Route::get('/adminProperty', 'App\Http\Controllers\adminPropertyController@index')->name('adminProperty');

Route::get('/adminProperty/{slug}', 'App\Http\Controllers\adminPropertyController@show')->name('adminProperty.show');

Route::get('/forRent', 'App\Http\Controllers\RentalController@forRent')->name('forRent');

Route::get('/forRent/{property}', 'App\Http\Controllers\RentalController@show')->name('forRent.show');

Route::get('/map', function () {
    return view('mapbox/map');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});