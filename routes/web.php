<?php

use App\Http\Controllers\Auth\SettingsController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\MealController;
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
    Route::delete('/workouts/delete', 'delete');
    Route::get('/searchWorkout', 'keySearch');
});

Route::controller(SettingsController::class)->group(function() {
   route::get('/settings', 'index');
   route::get('/settings/emailReset', 'email');
   route::post('settings/uploadProfile','store');
});

Route::controller(MealController::class)->group(function() {
    route::get('/meals', 'index');
});
