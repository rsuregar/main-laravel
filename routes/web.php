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

// Route::get('/', function () {
//     return view('atlantis.index');
// });

Route::view('/', 'atlantis.index');
Route::view('dashboard/index2', 'atlantis.index2')->name('index2');

// Route::get('dashboard/index2', function () {
//     return view('atlantis.index2');
// })->name('index2');
Auth::routes();
Route::group(['prefix' => 'components'], function(){
    Route::view('avatars', 'atlantis.components.avatars')->name('avatars');
});
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('components/avatars', function () {
//     return view('atlantis.components.avatars');
// })->name('avatars');




