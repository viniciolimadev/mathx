<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::post('/generate-exercise', [MainController::class, 'generateExercises'])->name('generateExercise');
Route::get('/print-exercise', [MainController::class, 'printExercises'])->name('printExercise');
Route::get('/export-exercise', [MainController::class, 'exportExercises'])->name('exportExercise');
