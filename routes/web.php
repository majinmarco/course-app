<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/courses', [CourseController::class, 'index'])->name('course.index');

Route::get('/courses/create', [CourseController::class, 'create'])->name('course.create');

Route::post('/courses', [CourseController::class, 'store'])->name('course.store');

Route::get('/courses/{id}', [CourseController::class, 'show'])->name('course.show');

Route::put('/courses/{id}', [CourseController::class, 'update'])->name('course.update');

Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('course.destroy');

Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('course.edit');