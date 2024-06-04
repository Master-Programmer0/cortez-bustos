<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeManagementController;
use App\Http\Controllers\BSITController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('student', [EmployeeManagementController::class, 'index'])->name('student.index');

    Route::get('employees', [EmployeeManagementController::class, 'index'])->name('employees.index');
    Route::get('employees/create', [EmployeeManagementController::class, 'create'])->name('employees.create');
    Route::post('employees', [EmployeeManagementController::class, 'store'])->name('employees.store');
    Route::get('employees/{employee}/edit', [EmployeeManagementController::class, 'edit'])->name('employees.edit');
    Route::put('employees/{employee}', [EmployeeManagementController::class, 'update'])->name('employees.update');
    Route::delete('employees/{employee}', [EmployeeManagementController::class, 'destroy'])->name('employees.destroy');

    Route::get('student', [BSITController::class, 'index'])->name('student.index');
    Route::get('student/create', [BSITController::class, 'create'])->name('student.create');
    Route::post('student', [BSITController::class, 'store'])->name('student.store');
    Route::get('student/{employee}/edit', [BSITController::class, 'edit'])->name('student.edit');
    Route::put('student/{employee}', [BSITController::class, 'update'])->name('student.update');
    Route::delete('student/{employee}', [BSITController::class, 'destroy'])->name('student.destroy');


    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});