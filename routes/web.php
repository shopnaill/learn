<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;

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

Route::get('/',  [HomeController::class, 'slider'])->name('slider');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


// admin routes

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// sliders routes
Route::get('/admin/slider', [AdminController::class, 'slider'])->name('admin.slider');
Route::get('/admin/slider/create', [AdminController::class, 'slider_create'])->name('admin.slider.create');
Route::post('/admin/slider/update_create', [AdminController::class, 'slider_update_create'])->name('admin.slider.update_create');
Route::get('/admin/slider/edit/{id}', [AdminController::class, 'slider_edit'])->name('admin.slider.edit');
Route::post('/admin/slider/update/{id}', [AdminController::class, 'slider_update'])->name('admin.slider.update');

// students routes
Route::get('/admin/students', [AdminController::class, 'students'])->name('admin.students');
Route::get('/admin/students/create', [AdminController::class, 'students_create'])->name('admin.students.create');
Route::post('/admin/students/update_create', [AdminController::class, 'students_update_create'])->name('admin.students.update_create');
Route::get('/admin/students/edit/{id}', [AdminController::class, 'students_edit'])->name('admin.students.edit');
Route::post('/admin/students/update/{id}', [AdminController::class, 'students_update'])->name('admin.students.update');

// courses routes
Route::get('/admin/courses', [AdminController::class, 'courses'])->name('admin.courses');
Route::get('/admin/courses/create', [AdminController::class, 'courses_create'])->name('admin.courses.create');
Route::post('/admin/courses/update_create', [AdminController::class, 'courses_update_create'])->name('admin.courses.update_create');
Route::get('/admin/courses/edit/{id}', [AdminController::class, 'courses_edit'])->name('admin.courses.edit');
Route::post('/admin/courses/update/{id}', [AdminController::class, 'courses_update'])->name('admin.courses.update');

// social routes
Route::get('/admin/social', [AdminController::class, 'social'])->name('admin.social');
Route::get('/admin/social/create', [AdminController::class, 'social_create'])->name('admin.social.create');
Route::post('/admin/social/update_create', [AdminController::class, 'social_update_create'])->name('admin.social.update_create');
Route::get('/admin/social/edit/{id}', [AdminController::class, 'social_edit'])->name('admin.social.edit');
Route::post('/admin/social/update/{id}', [AdminController::class, 'social_update'])->name('admin.social.update');


// index slider routes
Route::get('/admin/index_slider', [AdminController::class, 'index_slider'])->name('admin.index_slider');
Route::get('/admin/index_slider/create', [AdminController::class, 'index_slider_create'])->name('admin.index_slider.create');
Route::post('/admin/index_slider/update_create', [AdminController::class, 'index_slider_update_create'])->name('admin.index_slider.update_create');
Route::get('/admin/index_slider/edit/{id}', [AdminController::class, 'index_slider_edit'])->name('admin.index_slider.edit');
Route::post('/admin/index_slider/update/{id}', [AdminController::class, 'index_slider_update'])->name('admin.index_slider.update');
