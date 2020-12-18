<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [TeamController::class, 'index'])->middleware('auth')->middleware('auth');
Route::get('/team/{team}', [TeamController::class, 'show'])->name('team')->middleware('auth');

Route::post('/team/{team}', [CommentController::class, 'store'])->name('comment')->middleware('auth');

Route::get('/players/{player}', [PlayerController::class, 'show'])->name('player')->middleware('auth');

Route::group(['middleware' => 'guest'], function (){
    Route::get('/register', [AuthController::class, 'getRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'getLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');;
