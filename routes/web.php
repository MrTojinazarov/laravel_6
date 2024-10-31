<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
})->middleware('auth');

Route::get('/university', [UniversityController::class, 'index'])->name('universities.index')->middleware('auth');
Route::delete('/university/{university}', [UniversityController::class, 'delete'])->name('university.delete')->middleware('auth');
Route::put('/university', [UniversityController::class, 'store'])->name('university.create')->middleware('auth');


Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.index');
Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.index');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');