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


use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;

Route::get('/', 'UserController@getIndex');

Route::get('/cashier', 'ItemController@getCashier');

Route::get('/login', 'UserController@getLogin');

Route::get('/report', 'ItemController@getReport');

Route::get('/inventory', 'ItemController@getInventory');

Route::get('/transaction', 'TransactionController@getTransaction');

Route::post('/login', 'UserController@login');

Route::post('/inventory', 'ItemController@editStock');

Route::get('/get-transaction-detail', 'TransactionController@getTransactionDetail');

Route::get('/insert-transaction', 'TransactionController@insertTransactionData');

Route::get('/insert-shipped-item', 'ItemController@insertShippedItemData');

Route::get('/logout', 'UserController@logout');

Route::get('/asd', function (){
    if(session()->get('id')){
        return session()->all();
    }else{
        return "dsa";
    }

});

Route::get('/dsa', function (Request $request){
    return $request->session()->flush();
});
