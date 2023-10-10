<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseRegistrationController;
use App\Http\Controllers\TimeTableController;
use App\Http\Controllers\UnitListController;

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

Route::get('/dashboard', [Controller::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);
/* Route::get('/courseregistration', [CourseController::class, 'index'])->name('courseregistration')->middleware(['auth', 'verified']); */
/* Route::resource('/courseregistration', CourseRegistrationController::class); */
Route::resource('/unitlist', UnitListController::class);
Route::resource('/timetable', TimeTableController::class);
Route::get('/courseregistration', [CourseRegistrationController::class, 'index'])->name('courseregistration');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/set-theme', [ThemeController::class, 'setTheme'])->name('set-theme');
Route::get('/get-theme', [ThemeController::class, 'getTheme'])->name('get-theme');

require __DIR__ . '/auth.php';
require __DIR__ . '/notifications.php';
