<?php

use App\Models\User;
use App\Models\questions;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnswersController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\questionsController;
use App\Http\Controllers\ProfileQuestionsController;
use App\Models\Answers;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/test', [AnswersController::class, 'index']);
Route::post('/test', [AnswersController::class, 'store']);

Route::get('/result', function () {
    return view('results', [
        "title" => "Results"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('login', [AuthController::class, 'index'])->middleware(['auth', 'is_verify_email']); 
Route::get('account/verify/{token}', [AuthController::class, 'verifyAccount'])->name('user.verify'); 

Route::get('/home', [HomesController::class, 'index'])->middleware('auth');