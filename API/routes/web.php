<?php

use Illuminate\Support\Facades\Route;

// Users Routes

Route::get('/api/users', [UsersController::class], 'index');
Route::post('/api/users', [UsersController::class], 'store');
Route::get('/api/users/{id}', [UsersController::class], 'show');
Route::put('/api/users/{id}', [UsersController::class], 'update');
Route::delete('/api/users/{id}', [UsersController::class], 'destroy');


// Proyects Routes

Route::get('/api/proyects', [ProyectsController::class], 'index');
Route::post('/api/proyects', [ProyectsController::class], 'store');
Route::get('/api/proyects/{id}', [ProyectsController::class], 'show');
Route::put('/api/proyects/{id}', [ProyectsController::class], 'update');
Route::delete('/api/proyects/{id}', [ProyectsController::class], 'destroy');

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

Route::get('/api/comunications', [ComunicationsController::class], 'index');
Route::post('/api/comunications', [ComunicationsController::class], 'store');
Route::get('/api/comunications/{id}', [ComunicationsController::class], 'show');
Route::delete('/api/comunications/{id}', [ComunicationsController::class], 'destroy');
