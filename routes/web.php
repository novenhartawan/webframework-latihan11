<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/students')
    ->controller(StudentsController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::get('/{student}', 'show');

        Route::get('/{student}/edit', 'edit');
        Route::put('/{student}', 'update');

        Route::delete('/{student}', 'destroy');

        Route::post('/', 'store');
    });