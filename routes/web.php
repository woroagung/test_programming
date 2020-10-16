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

Route::get('/', 'PegawaiController@index')->name('PegawaiController');
Route::get('/addData', 'PegawaiController@add_data')->name('addData');
Route::post('/addData', 'PegawaiController@add_data')->name('addData');
Route::get('/editData', 'PegawaiController@edit_data')->name('editData');
Route::post('/editData', 'PegawaiController@edit_data_process')->name('editDataProcess');
Route::get('/deleteData', 'PegawaiController@delete_data_process')->name('deleteData');