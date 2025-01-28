<?php

use App\Http\Controllers\AddCourseController;
use App\Http\Controllers\AddTransactionController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EditCourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthenticatedSessionController::class, 'create']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [CourseController::class, 'index'])->name('dashboard');
    Route::get('/cetakCourse', [CourseController::class, 'cetakCourse'])->name('cetakCourse');
    Route::get('/addCourse', [CourseController::class, 'read'])->name('addCourse');
    Route::post('/addCourse', [CourseController::class, 'store'])->name('addCourses');
    Route::get('/editCourse/{id}/edit', [CourseController::class, 'edit']);
    Route::put('/editCourse/{id}/edit', [CourseController::class, 'update']);
    Route::delete('/deleteCourse/{id}/delete', [CourseController::class, 'destroy']);
    Route::get('/courseExport', [CourseController::class, 'courseExport'])->name('courseExport');
    Route::post('/courseImport', [CourseController::class, 'courseImport'])->name('courseImport');
    
    Route::get('/student', [StudentController::class, 'index'])->name('student');
    Route::get('/studentExport', [StudentController::class, 'studentExport'])->name('studentExport');
    Route::post('/studentImport', [StudentController::class, 'studentImport'])->name('studentImport');
    Route::get('/cetakStudent', [StudentController::class, 'cetakStudent'])->name('cetakStudent');
    
    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
    Route::post('/addtransaction', [TransactionController::class, 'store'])->name('addtransaction');
    Route::get('/transaction/{id}/edit', [TransactionController::class, 'edit']);
    Route::put('/transaction/{id}/edit', [TransactionController::class, 'update']);
    Route::delete('/deletetransaction/{id}/delete', [TransactionController::class, 'destroy']);
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
