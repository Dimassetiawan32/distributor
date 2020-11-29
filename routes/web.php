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
    Route::post('save', 'PesananController@store')->name('pesanan.save');
    Route::get('editform/{pesanan}','PesananController@edit')->name('pesanan.editform');
    Route::patch('update/{pesanan}','PesananController@update')->name('pesanan.update');
    Route::delete('delete/{pesanan}', 'PesananController@destroy')->name('pesanan.delete');
});

Route::group(['prefix' => 'laporan'], function(){
    Route::get('index', 'LaporanController@index')->name('laporan.index');
});

Route::group(['prefix' => 'suplier'], function(){
    Route::get('index', 'SuplierController@index')->name('suplier.index');
    Route::get('create', 'SuplierController@create')->name('suplier.create');
    Route::post('save', 'SuplierController@store')->name('suplier.save');
    Route::get('editform/{suplier}', 'SuplierController@edit')->name('suplier.editform');
    Route::patch('update/{suplier}', 'SuplierController@update')->name('suplier.update');
    Route::get('show/{suplier}', 'SuplierController@show')->name('suplier.show');
    Route::delete('delete/{suplier}', 'SuplierController@destroy')->name('suplier.delete');
});