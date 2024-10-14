<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VidioController;
use App\Http\Controllers\ComitController;


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



 Route::get('/polymorphy', [BlogController::class, 'gett']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');