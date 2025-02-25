<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::get('/pegawai/{id}', [PegawaiController::class, 'show']);
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit']);
Route::post('/pegawai', [PegawaiController::class, 'store']);
Route::put('/pegawai/{id}', [PegawaiController::class, 'update'] );
Route::get('/pegawai/{id}/delete', [PegawaiController::class, 'delete']);
Route::delete('/pegawai/{id}/', [PegawaiController::class, 'destroy']);