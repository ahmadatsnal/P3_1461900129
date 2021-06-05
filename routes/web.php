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

Route::get('/', 'FikriController@index')->name('transaksi');
Route::get('/tambah', 'FikriController@tambah')->name('transaksi.tambah');
Route::get('/edit/{id}', 'FikriController@edit')->name('transaksi.edit');
Route::get('/search', 'FikriController@search')->name('transaksi.search');
Route::get('/proses', 'FikriController@store')->name('transaksi.proses');
Route::get('/hapus/{id}', 'FikriController@destroy')->name('transaksi.hapus');
Route::get('/update/{id}', 'FikriController@update')->name('transaksi.update');