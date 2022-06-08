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


    Route::group(['prefix'=>'doctor', 'middleware'=>'auth'], function (){
        Route::get('/', [\App\Http\Controllers\MainController::class, 'doctors'])->name('doctors');

        Route::post('/like/{id}' , [\App\Http\Controllers\DoctorController::class, 'likeDoctor'])->name('doctor.like');
        Route::post('/unlike/{id}', [\App\Http\Controllers\DoctorController::class, 'unlikeDoctor'])->name('doctor.unlike');
    });


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
