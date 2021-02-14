<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/',[HomeController::class,'homePage']);
Route::get('/assignments',[HomeController::class,'assignmentsPage']);
Route::post('/projectAssigments',[HomeController::class,'insertAssignment']);
Route::get('/tasks',[HomeController::class , 'tasksPage']);
Route::post('/user_tasks',[HomeController::class,'inserTaskForUser']);
