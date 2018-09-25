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
    return view('paypal.index');
});

Route::get('/pay', 'paypalController@create')->name('pay');
Route::get('/payment/success', 'paypalController@success');;
