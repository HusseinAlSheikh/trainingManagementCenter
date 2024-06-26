<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudyLevelCategoryController;
use App\Http\Controllers\StudyLevelController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['guest'])->group(function () {

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');


    Route::post('/login', [AuthController::class,'login'] )->name('postLogin');

});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::middleware(['auth','isDeveloper'])->group(function () {
    Route::get('/studyLevelCategory',[StudyLevelCategoryController::class ,'index'])->name('studyLevelCategory.index');
    //---------
    Route::get('/studyLevel',[StudyLevelController::class ,'index'])->name('studyLevel.index');
});

