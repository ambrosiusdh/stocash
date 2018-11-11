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


use Illuminate\Http\Request;

Route::get('/', 'UserController@checkSession');

Route::get('/cashier', 'ItemController@getCashier');

Route::get('/login', 'UserController@getLogin');

Route::get('/report', 'UserController@getReport');

Route::get('/inventory', 'ItemController@getInventory');

Route::get('/transaction', 'TransactionController@getTransaction');

Route::post('/login', 'UserController@login');

Route::post('/inventory', 'ItemController@editStock');

Route::get('/test', 'TransactionController@getTransactionDetail');

Route::get('/asd', function (Request $request){
    return $request->session()->all();
});

Route::get('/dsa', function (Request $request){
    return $request->session()->flush();
});
