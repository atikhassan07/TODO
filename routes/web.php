<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/add/todo', [HomeController::class, 'AddTodo'])->name('add.todo');
Route::post('/store/todo', [HomeController::class, 'StoreTodo'])->name('store.todo');
Route::get('/list/todo', [HomeController::class, 'listTodo'])->name('list.todo');
Route::get('/approve/todo/{id}', [HomeController::class, 'ApproveTodo'])->name('approve.todo');
Route::get('/cencle/todo/{id}', [HomeController::class, 'cencle'])->name('cencle.todo');
Route::get('/delete/todo/{id}', [HomeController::class, 'delete'])->name('delete.todo');