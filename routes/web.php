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
	$nilai = DB::table('penilaian')->get();
		return view('welcome',['nilai' => $nilai]);
});

Route::post('/tamu/store','TamuuController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'TamuController@datamu')->name('datamu');

Route::get('/cari', 'TamuController@cari');

Route::get('/datamu/cetak_pdf','TamuController@cetak_pdf');

//datamu

Route::get('/tamu','TamuController@index');

Route::get('/datamu','TamuController@datamu');

Route::get('/tamu/hapus/{id}','TamuController@hapus');  

//nilai

Route::get('/nilai','TamuController@nilai');

Route::post('/nilai/store','TamuController@nilaistore');

Route::get('/nilaiedit/{id}','TamuController@nilaiedit');

Route::post('/nilai/update','TamuController@nilaiupdate');

Route::get('/nilaihapus/{id}','TamuController@nilaihapus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
