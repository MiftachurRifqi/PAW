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

Route::get('/', function () {
    return view('welcome');
});

route::get('/beranda', 'BerandaController@index')->name('beranda');
route::get('/data-mahasiswa', 'MahasiswaController@index')->name('data-mahasiswa');
route::get('/create-mahasiswa', 'MahasiswaController@create')->name('create-mahasiswa');
route::post('/simpan-mahasiswa', 'MahasiswaController@store')->name('simpan-mahasiswa');
route::get('/edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('edit-mahasiswa');
route::get('/update-mahasiswa/{id}', 'MahasiswaController@update')->name('update-mahasiswa');
route::get('/delete-mahasiswa/{id}', 'MahasiswaController@destroy')->name('delete-mahasiswa');

