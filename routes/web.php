<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminFacultyController;
use App\Http\Controllers\AdminDepartmentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PaymentController;
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

Route::view('/', 'welcome');

Auth::routes();

Route::get('/department', [DepartmentController::class, 'index'])->name('department');
    Route::get('/faculty',    [FacultyController::class, 'index'])->name('faculty');


Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/faculty',    [AdminFacultyController::class, 'index'])->name('faculty');
    Route::post('/add/faculty',    [AdminFacultyController::class, 'add'])->name('addFaculty');

    Route::get('/department', [AdminDepartmentController::class, 'index'])->name('department');
    Route::get('/add/department', [AdminDepartmentController::class, 'add'])->name('addDepartment');

    Route::get('/students',    [StudentController::class, 'index'])->name('student');
    Route::get('/student/{student}',    [StudentController::class, 'single'])->name('singeStudent');

    Route::get('/payments',    [PaymentController::class, 'index'])->name('payment');
    Route::get('/payment/{due}',    [PaymentController::class, 'single'])->name('singlePayment');


});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


