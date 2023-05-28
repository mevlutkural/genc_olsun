<?php

use App\Http\Controllers\Admin\ActivitiesPostController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InternshipPostController;
use App\Http\Controllers\Admin\JobPostController;
use App\Http\Controllers\Admin\ScholarshipPostController;
use App\Http\Controllers\Admin\StudentClubController;
use App\Http\Controllers\Admin\TalentProgramController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\YoungUniversityController;
use App\Models\ActivitiesPost;
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

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/reset-password', [AuthController::class, 'resetPasswordForm'])->name('reset-password-form');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('reset-password');

Route::domain('panel.gencolsun.net')->middleware('auth:web')->group(function () {

    Route::get('/', function(){
        return redirect('/users');
    })->name('dashboard');

    Route::resource('/users', UserController::class);
    Route::get('/users/{user}/change-password', [UserController::class, 'passwordForm'])->name('users.change-password');
    Route::patch('/users/{user}/change-password', [UserController::class, 'updatePassword'])->name('users.update-password');

    Route::resource('/internship-posts', InternshipPostController::class);
    Route::resource('/scholarship-posts', ScholarshipPostController::class);
    Route::resource('/job-posts', JobPostController::class);
    Route::resource('/talent-programs', TalentProgramController::class);
    Route::resource('/activities-posts', ActivitiesPostController::class);
    Route::resource('/young-university', YoungUniversityController::class);
    Route::resource('/student-clubs', StudentClubController::class);
});