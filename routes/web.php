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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/moneyexchange','ResourceController@index')->name('resources.home');
    Route::get('/moneyexchange/transections','ResourceController@transections')->name('resources.trx');
    Route::get('/moneyexchange/buy','ResourceController@buy')->name('resources.buy');
    Route::post('/moneyexchange/buy/store','BuyController@store')->name('buy.store');
    Route::get('/moneyexchange/buy/{id}/confirm','BuyController@confirm')->name('buy.confirm');
    Route::get('/moneyexchange/sell','ResourceController@sell')->name('resources.sell');
    Route::post('/moneyexchange/sell/store','SellController@store')->name('sell.store');
    Route::get('/moneyexchange/sell/{id}/confirm','SellController@confirm')->name('sell.confirm');
    Route::get('/moneyexchange/users','ResourceController@users')->name('resources.users');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

