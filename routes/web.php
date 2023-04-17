<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('homepage');
Route::get('/about-us', [AboutController::class, 'aboutUs'])->name('about-us');

Route::get('/api/test/array', [TestController::class, 'arrayResponse']);
Route::get('/api/test/model', [TestController::class, 'modelResponse']);
Route::get('/api/test/collection', [TestController::class, 'collectionResponse']);

Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');

