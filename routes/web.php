<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'Pendaftar']);
Route::post('/pendaftar/simpan', [HomeController::class, 'Pendaftar_Simpan']);
Route::get('/admin', [AuthController::class, 'Admin']);
Route::post('/admin/login', [AuthController::class, 'Admin_Login']);
Route::get('/logout', [AuthController::class, 'Logout']);

Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->middleware('auth.session');
Route::get('/dashboard/hapus/{id}', [DashboardController::class, 'Dashboard_Hapus'])->middleware('auth.session');
Route::get('/dashboard/tolak/{id}', [DashboardController::class, 'Dashboard_Tolak'])->middleware('auth.session');
Route::get('/dashboard/validasi/{id}', [DashboardController::class, 'Dashboard_Validasi'])->middleware('auth.session');
