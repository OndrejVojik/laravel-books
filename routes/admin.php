<?php

use App\Http\Controllers\Admin\AuthorController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/authors',[AuthorController::class, 'index'])->name('admin.authors');
Route::get('/admin/authors/create',[AuthorController::class, 'create'])->name('admin.authors.create');
Route::post('/admin/authors',[AuthorController::class, 'store'])->name('admin.authors.store');
Route::get('/admin/authors/{author_id}',[AuthorController::class, 'edit'])->name('admin.authors.edit');
Route::put('/admin/authors/{author_id}', [AuthorController::class, 'update'])->name('admin.authors.update');