<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\StudentController;
use App\Models\Students;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/index',[LogController::class, 'index']);
Route::get('/login',[LogController::class, 'login']);
Route::post('/login/process',[LogController::class, 'process']);
Route::get('/time',[LogController::class, 'time']);
Route::post('/logout',[LogController::class, 'logout']);




Route::get('/signup', [StudentController::class, 'signup']);
Route::post('/store',[StudentController::class, 'store']);
Route::get('/log',[StudentController::class, 'log']);