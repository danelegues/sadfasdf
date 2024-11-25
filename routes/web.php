<?php

use App\Http\Controllers\TareaController;
use App\Http\Controllers\TrabajadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Rutas de Trabajadores
Route::get('/trabajadores/list', [TrabajadorController::class, 'index']);
Route::get('/trabajadores/create', [TrabajadorController::class, 'create']);
Route::post('/trabajadores/store', [TrabajadorController::class, 'store']);
Route::get('/trabajadores/show/{id}', [TrabajadorController::class, 'show']);

// Rutas de Tareas
Route::get('/tareas/index', [TareaController::class, 'index']);
Route::get('/tareas/create', [TareaController::class, 'create']);
Route::post('/tareas/store', [TareaController::class, 'store']);
Route::get('/tareas/edit/{id}', [TareaController::class, 'edit']);
Route::put('/tareas/update/{id}', [TareaController::class, 'update']);
Route::delete('/tareas/destroy/{id}', [TareaController::class, 'destroy']);

// Rutas de Departamentos
Route::get('/departamentos/list', [DepartamentoController::class, 'index']);
Route::get('/departamentos/create', [DepartamentoController::class, 'create']);
Route::post('/departamentos/store', [DepartamentoController::class, 'store']);

