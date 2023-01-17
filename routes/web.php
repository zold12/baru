<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function() {
    Route::get('logout',[AuthController::class, 'logout']);

    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('only_admin');

    Route::get('profile', [UserController::class, 'profile'])->middleware('only_user');

    Route::get('alumni', [AlumniController::class, 'index'])->middleware('only_admin');

    Route::get('surat', [SuratController::class, 'index']);

    Route::get('categories', [CategoryController::class, 'index'])->middleware('only_admin');
    Route::get('category-add', [CategoryController::class, 'add'])->middleware('only_admin');
    Route::post('category-add', [CategoryController::class, 'store']);

    Route::get('users', [UserController::class, 'index'])->middleware('only_admin');
    Route::get('user-add', [UserController::class, 'add'])->middleware('only_admin');
    Route::post('user-add',[UserController::class, 'store']);

    Route::get('profile', [UserController::class, 'profile'])->middleware('only_user');
});