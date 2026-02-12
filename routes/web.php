<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScanController;

Route::get('/', function () {
    return view('home', ['result' => '']);
});

// CRUD de Usuarios
Route::resource('usuarios', UsuarioController::class);

Route::post('/', [ScanController::class, 'scan'])->name('scan');


