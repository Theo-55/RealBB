<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\SettingsController;

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
Auth::routes();

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//workout controller routes
Route::controller(WorkoutController::class)->group(function () {
    Route::get('/workouts', 'index');
    Route::get('/workouts/create', 'create');
    Route::post('/workouts/create/save', 'save');
    Route::get('/workouts/capture', 'getAll');
});

Route::controller(\App\Http\Controllers\SettingsController::class)->group(function() {
   route::get('/settings', 'index');
});
