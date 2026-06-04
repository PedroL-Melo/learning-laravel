<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('listar_alimentos', function () {
    return view('alimentos.listar_alimentos');
})->name('listar_alimentos');