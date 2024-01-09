<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

// Route::get('/', [TodoController::class, 'index'])->name('dashboard');
Route::get('/', function(){
    return view('welcome');
});


Auth::routes();

Route::resource('question', QuestionController::class);
Route::post('/question/approve', [QuestionController::class,'approve'])->name('question.approve');
Route::post('/question/reject', [QuestionController::class,'reject'])->name('question.reject');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

