<?php

use Illuminate\Support\Facades\Route;

// Users Routes

Route::get('/api/users', [UsersController::class], 'index');
Route::post('/api/users', [UsersController::class], 'store');
Route::get('/api/users/{id}', [UsersController::class], 'show');
Route::put('/api/users/{id}', [UsersController::class], 'update');
Route::delete('/api/users/{id}', [UsersController::class], 'destroy');


// Projects Routes

Route::get('/api/projects', [ProjectsController::class], 'index');
Route::post('/api/projects', [ProjectsController::class], 'store');
Route::get('/api/projects/{id}', [ProjectsController::class], 'show');
Route::put('/api/projects/{id}', [ProjectsController::class], 'update');
Route::delete('/api/projects/{id}', [ProjectsController::class], 'destroy');

// Tasks Routes

Route::get('/api/tasks', [TasksController::class], 'index');
Route::post('/api/tasks', [TasksController::class], 'store');
Route::get('/api/tasks/{id}', [TasksController::class], 'show');
Route::put('/api/tasks/{id}', [TasksController::class], 'update');
Route::delete('/api/tasks/{id}', [TasksController::class], 'destroy');

// Users and Projects Routes

Route::post('/api/users-projects', [UsersProyectsController::class], 'store');
Route::delete('/api/users-projects/{id}', [UsersProyectsController::class], 'destroy');

// Comunications Routes

Route::get('/api/communications', [CommunicationsController::class], 'index');
Route::post('/api/communications', [CommunicationsController::class], 'store');
Route::get('/api/communications/{id}', [CommunicationsController::class], 'show');
Route::delete('/api/communications/{id}', [CommunicationsController::class], 'destroy');
