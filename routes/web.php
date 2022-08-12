<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Livewire\CourseStatus;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    

Route::get('/', [CourseController::class, 'all'])->middleware('auth')->name('home');

Route::get('cursos', [CourseController::class, 'index'])->middleware('auth')->name('all');
    
// Route::get('cursos', [CourseController::class, 'index'])->middleware('auth')->name('courses.index');

Route::get('cursos/{course}', [CourseController::class, 'show'])->middleware('auth')->name('courses.show');

Route::post('courses/{course}/enrolled', [CourseController::class, 'enrolled'])->middleware('auth')->name('courses.enrolled');                      

Route::get('course-status/{course}', CourseStatus::class)->middleware('auth')->name('courses.status');