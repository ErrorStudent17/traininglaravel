<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/proses-register', [AuthController::class, 'prosesRegister']);

Route::get('/dashboard', [DashboardController::class, 'index']);

//Route untuk buku
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books/save', [BookController::class, 'save']);
Route::get('/books/edit/{id}', [BookController::class, 'edit']);
Route::put('/books/update/{id}', [BookController::class, 'update']);
Route::delete('/books/delete/{id}', [BookController::class, 'destroy']);

//Route untuk siswa
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students/save', [StudentController::class, 'save']);
Route::get('/students/edit/{id}', [StudentController::class, 'edit']);
Route::put('/students/update/{id}', [StudentController::class, 'update']);
Route::delete('/students/delete/{id}', [StudentController::class, 'destroy']);

//Route untuk operator
Route::get('/operators', [OperatorController::class, 'index']);
Route::get('/operators/create', [OperatorController::class, 'create']);
Route::post('/operators/save', [OperatorController::class, 'save']);
Route::get('/operators/edit/{id}', [OperatorController::class, 'edit']);
Route::put('/operators/update/{id}', [OperatorController::class, 'update']);
Route::delete('/operators/delete/{id}', [OperatorController::class, 'destroy']);
