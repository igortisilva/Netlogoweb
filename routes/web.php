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
    return view('Homepage');
})->name('Home');

Route::get('/Fisica', function () {
    return view('Fisica');
})->name('Fisica');

Route::get('/ModelosFisicaEnsino', function () {
    return view('ModelosFisicaEnsino');
})->name('ModelosFisicaEnsino');

Route::get('/Modelo', function () {
    return view('Modelo');
})->name('Modelo');


