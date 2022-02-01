<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingsController;

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

//USER AUTHENTICATION
Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login','App\Http\Controllers\NormalUserController@login');

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register','App\Http\Controllers\NormalUserController@register');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//WISHLIST
Route::post('/add_to_wishlist',[ListingsController::class, 'addToWishlist']);

Route::get("wishlist",[ListingsController::class, 'displayWishlist']);

Route::get("remove_from_wishlist/{id}", [ListingsController::class, 'removeFromWishlist']);

//PROPERTIES
Route::get('/homes', 'App\Http\Controllers\ListingsController@index')->name('homes');

Route::post('/homes',[
    'as' => 'city',
    'uses' => 'App\Http\Controllers\ListingsController@index'
]);

Route::get('/homes/{property}', 'App\Http\Controllers\ListingsController@show')->name('homes.show');

Route::get('/adminProperty', 'App\Http\Controllers\adminPropertyController@index')->name('adminProperty');

Route::get('/adminProperty/{slug}', 'App\Http\Controllers\adminPropertyController@show')->name('adminProperty.show');

 //Route::get('/forRent', 'App\Http\Controllers\RentalController@forRent')->name('forRent');

 //Route::get('/forRent/{property}', 'App\Http\Controllers\RentalController@show')->name('homes.show');

Route::get('/map', function () {
    return view('mapbox/map');
});