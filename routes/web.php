<?php

use Illuminate\Support\Facades\Route;
use Apps\Models\KlinikModel;

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



Route::get('home_member', function () {
   	return view('/home_member');
});

//====================Admin klinik ========================

Route::get('index', function () {
   	return view('admin_klinik/index');
}); 

Route::get('klinik','KlinikController@klinik');
Route::post('addKlinik','KlinikController@create');
Route::put('editKlinik/{id}','KlinikController@update');
Route::delete('deleteKlinik/{id}','KlinikController@delete');