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

Route::view('/', 'index')->name('home');


Route::group(['prefix' => 'komplain', 'as' => 'komplain'], function(){

    Route::view('/', 'komplain.index');
    Route::view('/tambah', 'komplain.tambah')->name('.tambah');
    Route::view('/respons', 'komplain.tanggapan')->name('.respon');

});