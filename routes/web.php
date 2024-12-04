<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Todo List Read
Route::get('/todos', [TodoListController::class, 'index'])->name('todos.index');

// Todo List Store
Route::post('/todos/store', [TodoListController::class, 'store'])->name('todos.store');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/add', [ProductController::class, 'productAdd'])->name('product.add');
Route::post('/product/store', [ProductController::class, 'productStore'])->name('product.store');

Route::get('/product/edit/{id}', [ProductController::class, 'productEdit'])->name('product.edit');
Route::post('/product/edit/store', [ProductController::class, 'productEditStore'])->name('product.edit.store');

Route:: get('/product/delete/{id}', [ProductController::class, 'productDelete'])->name('product.delete');
