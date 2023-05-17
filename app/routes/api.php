<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('category', [\App\Http\Controllers\Api\CategoryController::class, 'index']);
Route::post('category', [\App\Http\Controllers\Api\CategoryController::class, 'store']);


Route::get('test', [\App\Http\Controllers\Api\TestController::class, 'index']);
Route::post('test', [\App\Http\Controllers\Api\TestController::class, 'store']);

Route::get('course', [App\Http\Controllers\Api\CourseController::class, 'index']);
Route::post('course', [App\Http\Controllers\Api\CourseController::class, 'store']);
Route::delete('course/{id}', [\App\Http\Controllers\Api\CourseController::class, 'destroy']);

Route::get('course/file/{id}', [App\Http\Controllers\Api\CourseController::class, 'show'])->name('course.file');

Route::get('company', [\App\Http\Controllers\Api\CompanyController::class, 'index']);
Route::post('company', [\App\Http\Controllers\Api\CompanyController::class, 'store']);
