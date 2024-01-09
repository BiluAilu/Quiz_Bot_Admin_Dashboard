<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;

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

// Route::resource('user', UserController::class);
Route::get('users/',[UserController::class,'index'])->name('users.index');
Route::get('users/show/{id}',[UserController::class,'show'])->name('users.show');
Route::get('users/blocked',[UserController::class,'blockedList'])->name('users.blocked');
Route::post('users/block',[UserController::class,'block'])->name('users.block');
Route::post('users/unblock',[UserController::class,'unBlock'])->name('users.unblock');
Route::get('questions/all',[QuestionController::class,'all'])->name('question.all');
Route::resource('question', QuestionController::class);
Route::post('/question/approve', [QuestionController::class,'approve'])->name('question.approve');
Route::post('/question/reject', [QuestionController::class,'reject'])->name('question.reject');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

