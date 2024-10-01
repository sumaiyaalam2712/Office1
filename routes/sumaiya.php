<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Backend\BannerController;
use App\Http\Controllers\Web\Backend\ServiceTypeController;
use App\Http\Controllers\Web\Backend\RequestController;
use App\Http\Controllers\RequestMailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Backend\PropertyController;


//!Route for HomeController
Route::get('/', [HomeController::class, 'index'])->name('homepage');


Route::get('/create_banner', [BannerController::class, 'index'])->name('CreateBanner.index');
 Route::post('/create_banner', [BannerController::class, 'save']);
 Route::get('/show_banner',[BannerController::class,'get'])->name('ShowBanner.get');
 Route::get('/delete_banner/{id}',[BannerController::class,'delete']);
 Route::get('/update_banner/{id}',[BannerController::class,'edit']);
 Route::post('/update_banner',[BannerController::class,'update']);
 Route::post('/search_banner', [BannerController::class, 'ssearch'])->name('SearchBanner.ssearch');
 Route::get('/search_banner', [BannerController::class, 'ssearch']);



 Route::get('/create_service_type', [ServiceTypeController::class, 'index'])->name('CreateServiceType.index');
 Route::post('/create_service_type', [ServiceTypeController::class, 'save']);
 Route::get('/show_service_type', [ServiceTypeController::class, 'get'])->name('ShowServiceType.get');
 Route::get('/update_service_type/{id}', [ServiceTypeController::class, 'edit']);
 Route::post('/update_service_type', [ServiceTypeController::class, 'update']);
 Route::get('/delete_service_type/{id}', [ServiceTypeController::class, 'delete']);
 Route::post('/search_service_type', [ServiceTypeController::class, 'ssearch'])->name('SearchServiceType.ssearch');
 Route::get('/search_service_type', [ServiceTypeController::class, 'ssearch']);


 //Route::get('/create_request', [RequestController::class, 'index'])->name('CreateRequest.index');
 Route::post('/create_request', [RequestController::class, 'save']);
 Route::get('/show_request', [RequestController::class, 'get'])->name('ShowRequest.get');
 Route::post('/search_request', [RequestController::class, 'ssearch'])->name('SearchRequest.ssearch');
 Route::get('/search_request', [RequestController::class, 'ssearch']);

 //Route::get('/update_request/{id}', [RequestController::class, 'edit']);
 //Route::post('/update_request', [RequestController::class, 'update']);
 //Route::get('/delete_request/{id}', [RequestController::class, 'delete']);



 Route::get('send-mail', [RequestMailController::class, 'index']);
 //Route::view('/requestMail','email.requestMail' );


 Route::get('/edit-profile', [ProfileController::class, 'index'])->name('Profile.index');
 Route::post('/edit-socialmedia', [ProfileController::class, 'saveSocial'])->name('Profile.saveSocial');
 Route::post('/edit-info', [ProfileController::class, 'saveInfo'])->name('Profile.updateInfo');




 Route::post('/create_property', [PropertyController::class, 'save']);

