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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'list'], function(){
    Route::get('index', 'ListController@index')->name('list.index');
    Route::get('create', 'ListController@create')->name('list.create');
    Route::post('save', 'ListController@store')->name('list.save');
    Route::get('editform/{list}','listController@edit')->name('list.editform');
    Route::patch('update/{list}','listController@update')->name('list.update');
    Route::get('show/{list}','listController@show')->name('list.show');
    Route::delete('delete/{list}', 'listController@destroy')->name('list.delete');
});

Route::group(['prefix' => 'pesanan'], function(){
    Route::get('index', 'PesananController@index')->name('pesanan.index');
    Route::get('create', 'PesananController@create')->name('pesanan.create');
});