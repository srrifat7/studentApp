<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index']);
Route::post('/store', [StudentController::class, 'store']);
Route::get('/admin', [StudentController::class, 'admin']);
Route::delete('/delete/{id}', [StudentController::class, 'destroy']);







