<?php

use App\Http\Controllers\ClassController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExtracurriculerController;
use App\Http\Controllers\TeacherController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/student', [StudentController::class, 'index']);

Route::get('/class', [ClassController::class, 'index']);

Route::get('/ekskul', [ExtracurriculerController::class, 'index']);

Route::get('/teacher', [TeacherController::class, 'index']);
