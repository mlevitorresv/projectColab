<?php

use App\Http\Middleware\ApiMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\CommunicationsController;
use App\Http\Controllers\AuthController;


// Public routes
//Authentication Routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Private Routes
Route::middleware(['jwt.auth', ApiMiddleware::class])->group(function () {
    //Authentication Routes
    Route::post('/logout', [AuthController::class, 'logout']);


    // Users Routes
    Route::get('/users', [UsersController::class, 'index']);
    Route::post('/users', [UsersController::class, 'store']);
    Route::get('/users/{id}', [UsersController::class, 'show']);
    Route::put('/users/{id}', [UsersController::class, 'update']);
    Route::delete('/users/{id}', [UsersController::class, 'destroy']);


    // Projects Routes
    Route::get('/projects', [ProjectsController::class, 'index']);
    Route::post('/projects', [ProjectsController::class, 'store']);
    Route::get('/projects/{id}', [ProjectsController::class, 'show']);
    Route::put('/projects/{id}', [ProjectsController::class, 'update']);
    Route::delete('/projects/{id}', [ProjectsController::class, 'destroy']);

    // Tasks Routes
    Route::get('/tasks', [TasksController::class, 'index']);
    Route::post('/tasks', [TasksController::class, 'store']);
    Route::get('/tasks/{id}', [TasksController::class, 'show']);
    Route::put('/tasks/{id}', [TasksController::class, 'update']);
    Route::delete('/tasks/{id}', [TasksController::class, 'destroy']);

    // Comunications Routes
    Route::get('/communications', [CommunicationsController::class, 'index']);
    Route::post('/communications', [CommunicationsController::class, 'store']);
    Route::get('/communications/{id}', [CommunicationsController::class, 'show']);
    Route::delete('/communications/{id}', [CommunicationsController::class, 'destroy']);

});
