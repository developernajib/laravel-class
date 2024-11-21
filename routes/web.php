<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', function () {
    return view('welcome');
});

// Todo List Read
Route::get('/todos', [TodoListController::class, 'index'])->name('todos.index');

// Todo List Store
Route::post('/todos/store', [TodoListController::class, 'store'])->name('todos.store');