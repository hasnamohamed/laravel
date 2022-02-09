<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/categories',[CategoryController::class, 'list'])->name('categories.index')->middleware('auth');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create')->middleware('auth');
Route::post('/categories/save', [CategoryController::class, 'save'])->name('categories.store')->middleware('auth');
Route::get('/categories/show/{id}', [CategoryController::class, 'show'])->name('categories.show')->middleware('auth');
Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete')->middleware('auth');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit')->middleware('auth');
Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update')->middleware('auth');
?>