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

Route::get('/rahmat', function(){
    return view('rahmat');
});

// Route::get('refKategoriBarang/{id}/kunci/{key}', 'RefKategoriBarangController@kunci')->name('refKategoriBarang.kunci');
// Route::post
// Route::put
// Route::delete


Route::get('refKategoriBarang', 'RefKategoriBarangController@index')->name('refKategoriBarang.index');

Route::get('refKategoriBarang/{refKategoriBarang}/edit', 'RefKategoriBarangController@edit')->name('refKategoriBarang.edit');

Route::get('refKategoriBarang/form', 'RefKategoriBarangController@create')->name('refKategoriBarang.buat');

Route::get('refKategoriBarang/{refKategoriBarang}', 'RefKategoriBarangController@show')->name('refKategoriBarang.show');

Route::patch('refKategoriBarang/{refKategoriBarang}', 'RefKategoriBarangController@update')->name('refKategoriBarang.update');

Route::post('refKategoriBarang', 'RefKategoriBarangController@store')->name('refKategoriBarang.store');

Route::get('refKategoriBarang/{refKategoriBarang}/hapuskandata', 'RefKategoriBarangController@destroy')->name('delete');



Route::resource('dataBarang', 'DataBarangController');


