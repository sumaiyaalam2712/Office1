<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VidioController;
use App\Http\Controllers\ComitController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;


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
    return view('welcome');
});

Auth::routes();


Route::get('/create-post', [PostController::class, 'index'])->name('index');
 Route::post('/create-post', [PostController::class, 'save'])->name('save');
 Route::get('/show-post',[PostController::class,'get'])->name('get');
 Route::get('/update-post/{id}',[PostController::class,'edit'])->name('edit');
 Route::post('/update-post',[PostController::class,'update'])->name('update');
 Route::get('/delete-post/{id}',[PostController::class,'delete'])->name('delete');

 Route::get('/relation', [UserController::class, 'oneToMany'])->name('relation');
 Route::get('/many-to-many-relation', [StudentController::class, 'manyToMany']);
 Route::get('/polymorphy', [BlogController::class, 'gett']);

 Route::get('/create-student', [StudentController::class, 'index']);
 Route::post('/create-student', [StudentController::class, 'save'])->name('save.student');



 Route::get('/create-course', [CourseController::class, 'index']);
 Route::post('/create-course', [CourseController::class, 'save'])->name('save.course');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
