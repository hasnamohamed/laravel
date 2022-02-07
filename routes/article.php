<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;

Route::get('/brands',[BrandController::class, 'list'])->name('brands.index');
Route::get('/brands/create', [BrandController::class, 'create'])->name('brands.create');
Route::post('/brands/save', [BrandController::class, 'save'])->name('brands.store');
Route::get('/brands/show/{id}', [BrandController::class, 'show'])->name('brands.show');
Route::delete('/delete/{id}', [BrandController::class, 'delete'])->name('brands.delete');




?>