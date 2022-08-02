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

Route::view('','welcome')->name('index');
Route::view('Peta','peta')->name('peta');
Route::view('Sambutan','sambutan')->name('sambutan');
Route::view('Merch','merch')->name('merch');
Route::view('Gallery','gallery')->name('gallery');
Route::view('Fakultas','fakultas')->name('fakultas');
Route::view('Anthem','anthem')->name('anthem');
Route::view('Ukm','ukm')->name('ukm');
Route::view('Logo','logo')->name('logo');
Route::view('Maskot','maskot')->name('maskot');
Route::view('Tugas 1 Pra-Bakti','tugas1pra')->name('tugas1pra');
Route::view('Tugas 2 Pra-Bakti','tugas2pra')->name('tugas2pra');
Route::view('Tugas 3 Pra-Bakti','tugas3pra')->name('tugas3pra');
Route::view('Tugas 1 Pasca-Bakti','tugas1pasca')->name('tugas1pasca');
Route::view('Tugas 2 Pasca-Bakti','tugas2pasca')->name('tugas2pasca');
