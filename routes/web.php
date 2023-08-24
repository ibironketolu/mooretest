<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

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
Route::get('/', function () {
    return view('login');
});

Route::get('dashboard', [TaskController::class, 'index'])->name('dashboard');
Route::post('store', [TaskController::class, 'store']);
Route::post('edit', [TaskController::class, 'edit']);
Route::post('delete', [TaskController::class, 'destroy']);