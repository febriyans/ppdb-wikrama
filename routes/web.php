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
    return view('home');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/siswa', 'SiswaController@index')->name('siswa.index');
Route::get('/siswa/create', 'SiswaController@create')->name('siswa.create');
Route::post('/siswa/create/store', 'SiswaController@store')->name('siswa.store');
Route::get('/siswa/{id}/edit', 'SiswaController@edit')->name('siswa.edit');
Route::post('/siswa/{id}/update', 'SiswaController@update')->name('siswa.update');
Route::get('/siswa/{id}/delete', 'SiswaController@delete')->name('siswa.delete');

