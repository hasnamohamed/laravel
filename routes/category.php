<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/categories',[CategoryController::class, 'list'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/save', [CategoryController::class, 'save'])->name('categories.store');
Route::get('/categories/show/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
?>