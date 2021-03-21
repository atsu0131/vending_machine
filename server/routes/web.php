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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'vendingController@index')->name('vending.index');

Route::post('/end', 'vendingController@end');

Route::get('/admin', 'adminController@index')->name('admin.index');
Route::get('admin/{id}/edit', 'adminController@edit')->name('admin.edit');
Route::post('admin/{id}', 'adminController@update')->name('admin.update'); 

Route::get('/money', 'moneyController@index')->name('money.index');
Route::get('money/{id}/edit', 'moneyController@edit')->name('money.edit');
Route::post('money/{id}', 'moneyController@update')->name('money.update'); 
