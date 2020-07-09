<?php

use Illuminate\Support\Arr;
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

    Route::view('/', 'komplain.index')->name('');
    Route::get('/tambah', 'Komplain\TambahController@showForm')->name('.tambah');
    Route::post('/tambah', 'Komplain\TambahController@baru')->name('.tambah');
    Route::view('/respons', 'komplain.tanggapan')->name('.respon');
    Route::post('/respons', 'Komplain\TanggapiController@tanggapi')->name('.respon');


});

Route::group(['prefix' => 'operator', 'as' => 'operator'], function(){
    
    Route::redirect('/', '/komplain');
    Route::view('/signin', 'operator')->name('.signin');
    Route::post('/signin', 'Operator\SignInController@signUp');

});