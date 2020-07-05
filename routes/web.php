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
    return view('/master');
});

Route::get('/artikel', 'ArtikelController@index'); // menampilkan halaman form
Route::get('/artikel/{id}', 'ArtikelController@show'); // show artikel
Route::get('create', 'ArtikelController@create'); // menampilkan semua
Route::post('/artikel', 'ArtikelController@store'); // menampilkan detail item dengan id 
Route::get('/artikel/{id}/delete', 'ArtikelController@delete'); // menampilkan form untuk edit item
Route::put('/artikel/{id}', 'ArtikelController@update'); // menyimpan perubahan dari form edit
Route::get('/artikel/{id}/edit', 'ArtikelController@edit'); // menghapus data dengan id