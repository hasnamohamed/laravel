<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/categories',[CategoryController::class, 'list'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/save', [CategoryController::class, 'save'])->name('categories.store');
Route::get('/categories/show/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
?>