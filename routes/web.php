<?php

use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/university', [UniversityController::class, 'index'])->name('universities.index');
Route::delete('/university/{university}', [UniversityController::class, 'delete'])->name('university.delete');
Route::put('/university', [UniversityController::class, 'store'])->name('university.create');