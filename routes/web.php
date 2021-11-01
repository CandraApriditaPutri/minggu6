<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('students', StudentController::class);

//Route search Student
Route::get('/search_student', [StudentController::class, 'search_student'])->name('search_student');

//Route user
Route::resource('users', UserController::class);

//Route search User
Route::get('/search', [UserController::class, 'search'])->name('search');

//Route untuk menapilkan nilai
Route::get('students/{id}/detail', [StudentController::class, 'detail']);