<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InternshipPostController;
use App\Http\Controllers\Admin\UserController;
use App\Models\InternshipPost;
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

//Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/panel/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/panel/login', [AuthController::class, 'login']);
Route::get('/panel/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/panel/reset-password', [AuthController::class, 'resetPasswordForm'])->name('reset-password-form');
Route::post('/panel/reset-password', [AuthController::class, 'resetPassword'])->name('reset-password');

Route::prefix('panel')->middleware('auth:web')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/users', UserController::class);
    Route::get('/users/{user}/change-password', [UserController::class, 'passwordForm'])->name('users.change-password');
    Route::patch('/users/{user}/change-password', [UserController::class, 'updatePassword'])->name('users.update-password');

    Route::resource('/internship-posts', InternshipPostController::class);
});