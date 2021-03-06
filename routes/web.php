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
    return view('HalamanDepan/beranda');
});

Route::get('/beranda', function () {
    return view('HalamanDepan/beranda');
});

// SISWA
Route::get('/siswa' , 'SiswaController@index')->name('data-siswa');
Route::get('/createsiswa' , 'SiswaController@create')->name('create-siswa');
Route::post('/simpansiswa' , 'SiswaController@store')->name('simpan-siswa');
Route::get('/editsiswa' , 'SiswaController@edit')->name('edit-siswa');


