<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

// Group routes
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs',  'index');
    Route::get('/jobs/create',  'create');
    Route::get('/jobs/{job}',  'show');
    Route::post('/jobs',  'store');
    Route::get('/jobs/{job}/edit',  'edit');
    Route::patch('/jobs/{job}',  'update');
    Route::delete('/jobs/{job}',  'destroy');
});

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);

Route::view('/contact', 'contact');
