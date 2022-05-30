<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/doctors', function (){
   return view('doctors');
}) ->middleware(['auth'])->name('doctors');

Route::get('/info/index', [\App\Http\Controllers\InfoController::class, 'index'])->middleware(['auth'])->name('info.index');

Route::get('/profile/{user}', [\App\Http\Controllers\ProfileController::class, 'index']) ->middleware(['auth'])->name('profile.index');

Route::get('/admin/index' ,  [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/doctors/index', [\App\Http\Controllers\AdminController::class, 'doctors'])->name('admin.doctors.index');

require __DIR__.'/auth.php';
