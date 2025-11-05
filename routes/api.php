<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::prefix('tasks')->group(function () {

    Route::get('/listar', [TaskController::class, 'index']);    

    Route::post('/nova', [TaskController::class, 'store']);

    Route::get('/{task}/detalhe', [TaskController::class, 'show']);

    Route::put('/{task}/editar', [TaskController::class, 'update']);
    
    Route::delete('/{task}/remover', [TaskController::class, 'destroy']);
});