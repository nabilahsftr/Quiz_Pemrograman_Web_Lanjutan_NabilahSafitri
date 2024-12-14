<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
Route::get('/golongan', [GolonganController::class, 'index'])->name('golongan.index');
Route::get('/golongan/create', [GolonganController::class, 'create'])->name('golongan.create');
Route::post('/golongan', [GolonganController::class, 'store'])->name('golongan.store');
Route::get('/golongan/{golongan}/edit', [GolonganController::class, 'edit'])->name('golongan.edit');
Route::put('/golongan/{id}', [GolonganController::class, 'update'])->name('golongan.update');
Route::delete('/golongan/{id}', [GolonganController::class, 'destroy'])->name('golongan.destroy');
Route::get('/pelanggan', ['App\Http\Controllers\PelangganController','index']);
Route::get('/pelanggan/create', ['App\Http\Controllers\PelangganController', 'create'])->name('pelanggan.create');
Route::post('/pelanggan', ['App\Http\Controllers\PelangganController', 'store'])->name('pelanggan.store');
Route::get('/pelanggan/{id}/edit', ['App\Http\Controllers\PelangganController', 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan/{id}', ['App\Http\Controllers\PelangganController', 'update'])->name('pelanggan.update');
Route::delete('/pelanggan/{id}', ['App\Http\Controllers\PelangganController', 'destroy'])->name('pelanggan.destroy');
Route::get('/pelanggan', ['App\Http\Controllers\PelangganController', 'index'])->name('pelanggan.index');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::middleware('auth')->group(function () {
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
    Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
    Route::post('/pelanggan', [PelangganController::class, 'store'])->name('pelanggan.store');
    Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
    Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
    Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('/users', [UsersController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
    Route::get('/golongan', [GolonganController::class, 'index'])->name('golongan.index');
    Route::get('/golongan/create', [GolonganController::class, 'create'])->name('golongan.create');
    Route::post('/golongan', [GolonganController::class, 'store'])->name('golongan.store');
    Route::get('/golongan/{id}/edit', [GolonganController::class, 'edit'])->name('golongan.edit');
    Route::put('/golongan/{id}', [GolonganController::class, 'update'])->name('golongan.update');
    Route::delete('/golongan/{id}', [GolonganController::class, 'destroy'])->name('golongan.destroy');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});