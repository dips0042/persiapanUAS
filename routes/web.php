<?php

use App\Http\Controllers\ExperienceController;
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

Route::get('/addNewExperience', [ExperienceController::class, 'addForm']);
Route::post('/dashboard', [ExperienceController::class, 'addExperience'])->name('save.experience');

Route::get('/dashboard', [ExperienceController::class, 'displayDashboard'])->name('show.dashboard');