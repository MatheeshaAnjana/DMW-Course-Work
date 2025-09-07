<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\StaffController;

Route::get('/', [DashboardController::class, 'getPage']);

// Events
Route::get('/events', [EventController::class, 'index']);
Route::get('/event/create', [EventController::class, 'create']);
Route::post('/event/store', [EventController::class, 'store']);
Route::get('/event/{id}/edit', [EventController::class, 'edit']);
Route::put('/event/{id}', [EventController::class, 'update']);
Route::delete('/event/{id}', [EventController::class, 'destroy']);

// Staff
Route::get('/staff', [StaffController::class, 'index']);
Route::get('/staff/create', [StaffController::class, 'create']);
Route::post('/staff/store', [StaffController::class, 'store']);
Route::get('/staff/{id}/edit', [StaffController::class, 'edit']);
Route::put('/staff/{id}', [StaffController::class, 'update']);
Route::delete('/staff/{id}', [StaffController::class, 'destroy']);
