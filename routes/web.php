<?php

use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/university', [UniversityController::class, 'index'])->name('universities.index');