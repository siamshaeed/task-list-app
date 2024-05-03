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

Route::get('/', [TaskController::class, 'taskList'])->name('taskList');
Route::get('/show-task', [TaskController::class, 'showTask'])->name('showTask');
Route::get('/add-task', [TaskController::class, 'addTask'])->name('addTask');
Route::get('/edit-task', [TaskController::class, 'editTask'])->name('editTask');


