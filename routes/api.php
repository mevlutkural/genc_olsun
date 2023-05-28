<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('/internship-posts', [ApiController::class, 'getInternshipPosts']);
Route::get('/scholarship-posts', [ApiController::class, 'getScholarshipPosts']);
Route::get('/job-posts', [ApiController::class, 'getJobPosts']);
Route::get('/talent-programs', [ApiController::class, 'getTalentPrograms']);
Route::get('/activities-posts', [ApiController::class, 'getActivitiesPosts']);
Route::get('/young-university', [ApiController::class, 'getYoungUniversity']);
Route::get('/student-clubs', [ApiController::class, 'getStudentClubs']);