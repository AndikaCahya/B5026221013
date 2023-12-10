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

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function (){
    return view('js2');
});

Route::get('/Layout', function (){
    return view('Layout');
});

Route::get('/link', function (){
    return view('link');
});

Route::get('/linktreebemfteic', function (){
    return view('linktreebemfteic');
});

Route::get('/responsive', function (){
    return view('responsive');
});

Route::get('/style', function (){
    return view('style');
});

Route::get('/validasi', function (){
    return view('validasi');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawaiii','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawaiii/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawaiii/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawaiii/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawaiii/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawaiii/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawaiii/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawaiii/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@nilai');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');
Route::get('/nilaikuliah/edit/{id}','App\Http\Controllers\NilaiController@edit');
Route::post('/nilaikuliah/update','App\Http\Controllers\NilaiController@update');
Route::get('/nilaikuliah/hapus/{id}','App\Http\Controllers\NilaiController@hapus');
Route::get('/nilaikuliah/cari','App\Http\Controllers\NilaiController@cari');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/tambah','App\Http\Controllers\KeranjangController@tambah');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

Route::get('/mouse','App\Http\Controllers\MouseController@indexMouse');
Route::get('/mouse/tambahMouse','App\Http\Controllers\MouseController@tambahMouse');
Route::post('/mouse/store','App\Http\Controllers\MouseController@store');
Route::get('/mouse/editMouse/{id}','App\Http\Controllers\MouseController@editMouse');
Route::post('/mouse/update','App\Http\Controllers\MouseController@update');
Route::get('/mouse/hapus/{id}','App\Http\Controllers\MouseController@hapus');
Route::get('/mouse/cari','App\Http\Controllers\MouseController@cari');
Route::get('/mouse/viewMouse/{id}','App\Http\Controllers\MouseController@viewMouse');