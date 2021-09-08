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
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'raden_ibnu\frontendController@index')->name('frontend.index');

Route::get('/home', 'homeController@index')->name('home');
Route::get('/create', 'homeController@create')->name('home.create');
Route::post('/', 'homeController@store')->name('home.store');
Route::get('/edit/{id}', 'homeController@edit')->name('home.edit');
Route::put('/{id}', 'homeController@update')->name('home.update');
Route::put('/delete', 'homeController@delete')->name('home.delete');
Route::delete('/{id}', 'homeController@destroy')->name('home.destroy');
Route::get('/show/{id}', 'homeController@show')->name('home.show');
