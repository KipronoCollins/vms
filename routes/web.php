<?php

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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('admin.users');
Route::get('/manageUser/{userId}', [App\Http\Controllers\UserController::class, 'edit'])->name('admin.manageUser');
Route::post('/updateUser', [App\Http\Controllers\UserController::class, 'update'])->name('admin.updateUser');
Route::get('/addUser', [App\Http\Controllers\UserController::class, 'create'])->name('admin.addUser');
Route::post('/saveUser', [App\Http\Controllers\UserController::class, 'store'])->name('admin.saveUser');

// vehicles
Route::get('/vehicles', [App\Http\Controllers\VehicleController::class, 'index'])->name('admin.vehicles');
Route::get('/manageVehicle/{vehicleId}', [App\Http\Controllers\VehicleController::class, 'edit'])->name('admin.manageVehicle');
Route::post('/updateVehicle', [App\Http\Controllers\VehicleController::class, 'update'])->name('admin.updateVehicle');
Route::get('/addVehicle', [App\Http\Controllers\VehicleController::class, 'create'])->name('admin.addVehicle');
Route::post('/saveVehicle', [App\Http\Controllers\VehicleController::class, 'store'])->name('admin.saveVehicle');

// Expense
Route::get('/addExpense/{vehicleId}', [App\Http\Controllers\ExpenseController::class, 'create'])->name('addExpense');
Route::post('/saveExpense', [App\Http\Controllers\ExpenseController::class, 'store'])->name('saveExpense');

//Trip
Route::get('/addTrip/{vehicleId}', [App\Http\Controllers\TripController::class, 'create'])->name('addTrip');
Route::post('/saveTrip', [App\Http\Controllers\TripController::class, 'store'])->name('saveTrip');
