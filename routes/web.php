<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FocusSessionController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RescuePlanController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/focus-sessions', [FocusSessionController::class, 'index'])->name('focus-sessions');
Route::get('/rescue-plans', [RescuePlanController::class, 'index'])->name('rescue-plans');
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
Route::get('/statistics', [StatisticController::class, 'index'])->name('statistics');
