<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProductController;
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

Route::get('/login', [AuthController::class, "login"]);
Route::post('/login',[AuthController::class,'store'])->name('admin.login');
Route::post('/logout',[AuthController::class,'logout'])->name('admin.logout');


Route::get('/', function () {
    return view('admin.index');
})->middleware(['auth:admin'])->name('admin.index');

Route::prefix('/products')->middleware(['auth:admin'])->group(function () {
    Route::get('/',[ProductController::class,'getAll'])->name('admin.products.index');
});