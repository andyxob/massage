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

Route::group(['middleware'=>'auth'], function (){
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/doctors', [\App\Http\Controllers\MainController::class, 'doctors']) ->middleware(['auth'])->name('doctors');

    Route::group(['prefix'=>'info'], function (){

        Route::get('/index', [\App\Http\Controllers\InfoController::class, 'index'])->middleware(['auth'])->name('info.index');

        Route::group(['prefix'=>'massage', 'middleware'=>'auth'], function (){
            Route::get('/{massage?}', [\App\Http\Controllers\InfoController::class, 'massage'])->name('massage');
        });

    });

    Route::get('/meet', [\App\Http\Controllers\MainController::class, 'meeting'])->name('meeting.index');


    Route::get('/profile/{user}', [\App\Http\Controllers\ProfileController::class, 'index']) ->middleware(['auth'])->name('profile.index');
    Route::group(['prefix'=>'admin', 'middleware'=>'is_admin'], function (){
        Route::get('/index' ,  [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
        Route::get('/doctors/index', [\App\Http\Controllers\AdminController::class, 'doctors'])->name('admin.doctors.index');
    });

});

require __DIR__.'/auth.php';
