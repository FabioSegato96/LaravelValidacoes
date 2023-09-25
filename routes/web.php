<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/index', 'App\Http\Controllers\ClienteControlador@index')->name('index');
Route::get('/novo_cliente', 'App\Http\Controllers\ClienteControlador@create')->name('novo_cliente');
Route::post('/inserir_cliente', 'App\Http\Controllers\ClienteControlador@store')->name('inserir_cliente');
Route::get('/editar_cliente/{id}', 'App\Http\Controllers\ClienteControlador@edit')->name('editar_cliente');
Route::get('/apagar_cliente/{id}', 'App\Http\Controllers\ClienteControlador@destroy')->name('apagar_cliente');
Route::post('/edicao_cliente/{id}', 'App\Http\Controllers\ClienteControlador@update')->name('edicao_cliente');