<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\Api\StudentController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.v1.')
->prefix('v1')
->group(function () {
    Route::get('/faculties', [FacultyController::class, 'index'])->name('faculties.index');
    Route::get('/faculties/{faculty}', [FacultyController::class, 'show'])->name('faculties.show');
    // Route::resource('/courses', CourseController::class);
    Route::get('/transcript', [StudentController::class, 'transcript'])->name('student.transcript');
});
