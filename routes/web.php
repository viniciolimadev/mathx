<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::post('/generate-exercise', [MainController::class, 'generateExercise'])->name('generateExercise');
Route::get('/print-exercise', [MainController::class, 'printExercise'])->name('printExercise');
Route::get('/export-exercise', [MainController::class, 'exportExercise'])->name('exportExercise');
