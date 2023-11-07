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