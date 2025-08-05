<?php
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('employees.index'));

Route::resource('employees', EmployeeController::class);
Route::get('employees/{employee}/payroll', [EmployeeController::class, 'payroll'])->name('employees.payroll');