<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\ClearanceController;
use App\Http\Controllers\Auth\StudentRegisterController;
use App\Http\Controllers\Auth\StaffRegisterController;

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/documents', [DocumentsController::class, 'index'])->name('documents');
    Route::post('/documents/upload', [DocumentsController::class, 'upload'])->name('documents.upload');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// web.php
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
});
// web.php
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/settings', [ProfileController::class, 'edit'])->name('profile.settings');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/clearance', [ClearanceController::class, 'index'])->name('clearance.index');
    Route::post('/clearance/upload', [ClearanceController::class, 'upload'])->name('clearance.upload');
});


Route::get('/register/student', [StudentRegisterController::class, 'showRegistrationForm']);
Route::post('/register/student', [StudentRegisterController::class, 'register'])->name('register.student');
Route::get('/register/staff', [StaffRegisterController::class, 'showRegistrationForm']);
Route::post('/register/staff', [StaffRegisterController::class, 'register'])->name('register.staff');



Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student-dashboard', [StudentController::class, 'index'])->name('student.dashboard');
    Route::post('/upload-document', [DocumentsController::class, 'upload'])->name('document.upload');
});

Route::middleware(['auth', 'role:staff'])->group(function () {
    Route::get('/staff-dashboard', [StaffController::class, 'index'])->name('staff.dashboard');
    Route::post('/approve-document', [DocumentsController::class, 'approve'])->name('document.approve');
});

require __DIR__.'/auth.php';
