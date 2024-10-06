<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/hello', function () { return "Hello from the other side";});
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/employees', function () { return view('employees/index');});
Route::get('/', [EmployeeController::class,'index'])->name('home');

Route::get('/{emp_id}/details', [EmployeeController::class,'details'])->name('employees.details');

Route::get('/create', [EmployeeController::class,'create'])->name('employees.create');
Route::post('/store', [EmployeeController::class,'store'])->name('employees.store');


Route::get('/{emp_id}/update', [EmployeeController::class,'edit'])->name('employees.edit');
Route::post('/{emp_id}/update', [EmployeeController::class,'update'])->name('employees.update');

Route::delete('/{emp_id}/delete', [EmployeeController::class,'destroy'])->name('employees.delete');


Route::get('/search', [EmployeeController::class,'search'])->name('employees.search');
