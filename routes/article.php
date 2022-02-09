<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;


Route::middleware(['auth'])->group(function () {
  Route::get('/brands',[BrandController::class, 'list'])->name('brands.index')->middleware('is_admin')->middleware('date');
Route::get('/brands/create', [BrandController::class, 'create'])->name('brands.create');
Route::post('/brands/save', [BrandController::class, 'save'])->name('brands.store');
Route::get('/brands/show/{id}', [BrandController::class, 'show'])->name('brands.show');
Route::get('brands/delete/{id}', [BrandController::class, 'delete'])->name('brands.delete');
Route::get('/brands/edit/{id}', [BrandController::class, 'edit'])->name('brands.edit');
Route::post('/brands/update/{id}', [BrandController::class, 'update'])->name('brands.update');

});
?>