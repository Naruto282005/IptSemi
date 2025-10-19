<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymController;

Route::get('/', [GymController::class, 'index'])->name('home');
Route::get('/members', [GymController::class, 'members'])->name('members.index');
Route::get('/trainers', [GymController::class, 'trainers'])->name('trainers.index');
Route::get('/sessions', [GymController::class, 'sessions'])->name('sessions.index');
