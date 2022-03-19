<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\CategoryController;



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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/user', [MainController::class, 'user'])->name('user');

Route::get('/repair', [RepairController::class, 'index'])->name('repair');
Route::post('/repair', [RepairController::class, 'store']);
Route::get('/repair/{repair}', [RepairController::class, 'destroy'])->name('repair.destroy');


Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::prefix('/admin')->middleware('admin')->group(function () {
    Route::get('/', [MainController::class, 'admin'])->name('admin');
    Route::get('/repair/{repair}/show', [RepairController::class, 'edit'])->name('repair.edit');
    Route::post('/repair/{repair}/edit', [RepairController::class, 'change'])->name('repair.change');
    Route::post('/category/', [CategoryController::class, 'add'])->name('category.add');
    Route::get('/category/{category}', [CategoryController::class, 'delete'])->name('category.delete');
});