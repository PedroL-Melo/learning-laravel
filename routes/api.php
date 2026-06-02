<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alimentosController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('criarAlimento', [alimentosController::class, 'criarAlimento'])->name('criarAlimento');
Route::get('listarAlimentos', [alimentosController::class, 'listarAlimentos'])->name('listarAlimentos');
Route::post('atualizarAlimentos', [alimentosController::class, 'atualizarAlimentos'])->name('atualizarAlimentos');
Route::delete('deletarAlimentos', [alimentosController::class, 'deletarAlimentos'])->name('deletarAlimentos');