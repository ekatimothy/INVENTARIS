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

Route::get('/kk', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('layout/app');
});

Route::get('/',[
    'uses'=>'C_barang@index',
    'as'=>'barang.read'
]);

Route::get('/buat',[
    'uses'=>'C_barang@create',
    'as'=>'barang.create'
]);

Route::post('/buat',[
    'uses'=>'C_barang@input',
    'as'=>'barang.input'
]);

Route::get('/edit/{id}',[
    'uses'=>'C_barang@edit',
    'as'=>'barang.edit'
]);

Route::put('/edit',[
    'uses'=>'C_barang@update',
    'as'=>'barang.update'
]);

Route::DELETE('/hapus/{id}',[
    'uses'=>'C_barang@delete',
    'as'=>'barang.delete'
]);

Auth::routes();
