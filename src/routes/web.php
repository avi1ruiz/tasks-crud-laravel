<?php

use App\Http\Controllers\TasksController;
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
    return view('welcome');
})->name('main');

route::get('/tasks', [TasksController::class, 'index'])->name('tasks.index');

Route::get('/tasks/create', [TasksController::class, 'create'])->name('tasks.create');

Route::post('/tasks/store', [TasksController::class, 'store'])->name('tasks.store');

Route::get('/tasks/edit/{tasks}', [TasksController::class, 'edit'])->name('tasks.edit');

Route::put('/tasks/update/{tasks}', [TasksController::class, 'update'])->name('tasks.update');

Route::get('/tasks/show/{tasks}', [TasksController::class, 'show'])->name('tasks.show');

Route::delete('/tasks/destroy/{tasks}', [TasksController::class, 'destroy'])->name('tasks.destroy');
