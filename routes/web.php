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



Route::get('about', function () {
    return view('about');
});

Route::get('super_index', function () {
   	return view('super_admin/super_index');
});

Route::get('admin_klinik', function () {
   return view('admin_klinik/index');
});