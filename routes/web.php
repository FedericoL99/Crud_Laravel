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

Route::resource('productos','\App\Http\Controllers\ProductoController');
Route::get('download-pdf','\App\Http\Controllers\ProductoController@generar_pdf')->name('descargar-pdf');
