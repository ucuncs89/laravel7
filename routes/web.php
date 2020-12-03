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
*

Route::get('/', function () {
    return view('barang.index');
});
*/
Route::get('/','BarangController@home')->name('home');
Route::get('/admin/','BarangController@index')->name('barang');
Route::get('/barang/create','BarangController@create')->name('barang.create');
Route::post('/barang/create','BarangController@store')->name('barang.store');
Route::get('/barang/edit/{id}','BarangController@edit')->name('barang.edit');
Route::post('/barang/edit/edit/{id}','BarangController@update')->name('barang.update');
Route::get('/barang/delete/{id}','BarangController@destroy')->name('barang.delete');

Route::get('/penjualan/','PenjualanController@index')->name('penjualan');
Route::get('/penjualan/create','PenjualanController@create')->name('penjualan.create');
Route::post('/penjualan/create','PenjualanController@store')->name('penjualan.store');
Route::get('/penjualan/edit/{id}','PenjualanController@edit')->name('penjualan.edit');
Route::post('/penjualan/edit/edit/{id}','PenjualanController@update')->name('penjualan.update');
Route::get('/penjualan/delete/{id}','PenjualanController@destroy')->name('penjualan.delete');
