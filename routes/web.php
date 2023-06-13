<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardSkillController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardEducationController;
use App\Http\Controllers\DashboardExperienceController;

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

Route::get('/', [LandingPageController::class, 'index']);
Route::post('/saveMessage', [LandingPageController::class, 'saveMessage'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function() {
    return view('dashboard.home');
})->middleware('auth');

Route::resource('/dashboard/profile', DashboardProfileController::class)->middleware('auth');
Route::resource('/dashboard/education', DashboardEducationController::class)->middleware('auth');
Route::resource('/dashboard/experience', DashboardExperienceController::class)->middleware('auth');
Route::resource('/dashboard/category', DashboardCategoryController::class)->middleware('auth');
Route::resource('/dashboard/skill', DashboardSkillController::class)->middleware('auth');
Route::resource('/dashboard/message', MessageController::class)->middleware('auth');


