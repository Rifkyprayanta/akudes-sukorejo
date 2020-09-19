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

Route::get('/', 'LoginController@getLogin')->name('login')->middleware('guest');
Route::get('/login', 'LoginController@getLogin')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@postLogin')->middleware('guest');
Route::resource('dasboard', 'DasboardController')->middleware('auth');
Route::resource('akun', 'AkunController')->middleware('auth');
Route::resource('user', 'UserController')->middleware('auth');
Route::resource('kasumum', 'KasUmumController')->middleware('auth');
Route::get('/danadesa', 'KasAkunController@index')->name('danadesa');
Route::get('/add', 'KasAkunController@add')->name('add');
Route::get('/silpa', 'KasAkunController@silpa')->name('silpa');
Route::get('/pad', 'KasAkunController@pad')->name('pad');
Route::get('/dll', 'KasAkunController@dll')->name('dll');
Route::get('/caridata', 'KasAkunController@caridata')->name('caridata');
Route::get('/prosescaridata', 'KasAkunController@prosescaridata')->name('prosescaridata');
Route::get('/laporan', 'LaporanController@index')->name('laporan');
Route::get('/laporanakun', 'LaporanController@laporanakun')->name('laporanakun');
Route::get('/cari', 'LaporanController@caritanggal')->name('cari');
Route::get('/cariakun', 'LaporanController@caritanggalakun')->name('cariakun');
Route::get('/print', 'PrintController@print')->name('print');
Route::get('/tutupakun', 'LaporanController@tutupakun')->name('tutupakun');
Route::get('/prosestutupakun', 'LaporanController@prosestutupakun')->name('prosestutupakun');

Route::get('/logout', 'LoginController@logout')->middleware('auth')->name('logout');

