<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(ResumeController::class)->group(function () {
        Route::get('/resume/index', 'index');
    });

    Route::controller(JobController::class)->group(function () {
        Route::get('/job/edit', 'edit');
        Route::post('/job/store','store');
        Route::get('/job/create', 'create');
        Route::get('/job/index', 'index');
    });
});

require __DIR__.'/auth.php';
