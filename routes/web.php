<?php

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

    // Route::get('/', function () {
    //     return view('welcome');
    // });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ekstracurricular', [App\Http\Controllers\EkstracurricularController::class, 'index'])->name('ekstracurricular');
Route::get('/major', [App\Http\Controllers\MajorController::class, 'index'])->name('major');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/visi-misi', [App\Http\Controllers\VisiMisiController::class, 'index'])->name('visi-misi');
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index'])->name('staff');
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery');
Route::get('/sambutan', [App\Http\Controllers\SambutanController::class, 'index'])->name('sambutan');
Route::get('/fasilitas', [App\Http\Controllers\FasilitasController::class, 'index'])->name('fasilitas');
