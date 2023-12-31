<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', [EmployeeController::class, "index"]);
Route::get('/employees/index', [EmployeeController::class, "index"])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, "create"])->name('employees.create');
Route::post('/employees/store', [EmployeeController::class, "store"])->name('employees.store');
Route::get('/employees/{employee}', [EmployeeController::class, "show"])->name('employees.show');
Route::get('/employees/{employee}/edit', [EmployeeController::class, "edit"])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, "update"])->name('employees.update');
Route::get('/employees/{employee}/destroy', [EmployeeController::class, 'destroy'])->name('employees.destroy');

