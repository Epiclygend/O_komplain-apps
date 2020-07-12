<?php

use App\Komplain;
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
    
    Route::get('tambah', 'Komplain\TambahController@showForm')->name('.tambah');
    Route::post('tambah', 'Komplain\TambahController@baru')->name('.tambah');
    Route::get('respons/{id}', 'Komplain\TanggapiController@showForm')->name('.respon');
    Route::post('respons/{id}', 'Komplain\TanggapiController@tanggapi');
    Route::put('selesai/{id}', 'Komplain\TanggapiController@komplainSelesai')->name('.selesai');
    
});
Route::resource('komplain', 'Komplain\SimpleCRUDController')->only([
    'index', 'destroy'
]);

        
Route::group(['prefix' => 'operator', 'as' => 'operator'], function(){
    
    Route::redirect('/', '/komplain');
    Route::get('/signin', 'Operator\SignInController@showForm')->name('.signin');
    Route::post('/signin', 'Operator\SignInController@signUp')->name('.signin');

});