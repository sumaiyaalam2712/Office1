<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Backend\BannerController;
use App\Http\Controllers\Web\Backend\ServiceTypeController;
use App\Http\Controllers\Web\Backend\RequestController;
use App\Http\Controllers\RequestMailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Backend\PropertyController;
use App\Http\Controllers\Web\Backend\AllCityController;
use App\Http\Controllers\Web\Backend\ApartmentCategoryController;
use App\Http\Controllers\Web\Backend\AppartmentTypeController;
use App\Http\Controllers\Web\Backend\SearchController;


//Route for HomeController
Route::get('/', [HomeController::class, 'index'])->name('homepage');


Route::get('/create_banner', [BannerController::class, 'index'])->name('CreateBanner.index');
 Route::post('/create_banner', [BannerController::class, 'save']);
 Route::get('/show_banner',[BannerController::class,'get'])->name('ShowBanner.get');
 Route::get('/delete_banner/{id}',[BannerController::class,'delete']);
 Route::get('/update_banner/{id}',[BannerController::class,'edit']);
 Route::post('/update_banner',[BannerController::class,'update']);
 Route::post('/search_banner', [BannerController::class, 'ssearch'])->name('SearchBanner.ssearch');
 Route::get('/search_banner', [BannerController::class, 'ssearch']);




 Route::get('/create-apartment-category', [ApartmentCategoryController::class, 'index'])->name('CreateCategory.index');
 Route::post('/create-apartment-category', [ApartmentCategoryController::class, 'save']);
 Route::get('/show-apartment-category',[ApartmentCategoryController::class,'get'])->name('ShowCategory.get');
 Route::get('/delete-apartment-category/{id}',[ApartmentCategoryController::class,'delete']);
 Route::get('/update-apartment-category/{id}',[ApartmentCategoryController::class,'edit']);
 Route::post('/update-apartment-category',[ApartmentCategoryController::class,'update']);


 Route::get('/create-apprtment-type', [AppartmentTypeController::class, 'index'])->name('CreateType.index');
 Route::post('/create-apprtment-type', [AppartmentTypeController::class, 'save']);
 Route::get('/show-apprtment-type',[AppartmentTypeController::class,'get'])->name('ShowType.get');
 Route::get('/delete-apprtment-type/{id}',[AppartmentTypeController::class,'delete']);
 Route::get('/update-apprtment-type/{id}',[AppartmentTypeController::class,'edit']);
 Route::post('/update-apprtment-type',[AppartmentTypeController::class,'update']);


 Route::get('/create-city', [AllCityController::class, 'index'])->name('CreateCity.index');
 Route::post('/create-city', [AllCityController::class, 'save']);
 Route::get('/show-city',[AllCityController::class,'get'])->name('ShowCity.get');
 Route::get('/delete-city/{id}',[AllCityController::class,'delete']);
 Route::get('/update-city/{id}',[AllCityController::class,'edit']);
 Route::post('/update-city',[AllCityController::class,'update']);



 Route::get('/create_service_type', [ServiceTypeController::class, 'index'])->name('CreateServiceType.index');
 Route::post('/create_service_type', [ServiceTypeController::class, 'save'])->name('CreateServiceType.store');
 Route::get('/show_service_type', [ServiceTypeController::class, 'get'])->name('ShowServiceType.get');
 Route::get('/update_service_type/{id}', [ServiceTypeController::class, 'edit']);
 Route::post('/update_service_type', [ServiceTypeController::class, 'update']);
 Route::get('/delete_service_type/{id}', [ServiceTypeController::class, 'delete']);
 Route::post('/search_service_type', [ServiceTypeController::class, 'ssearch'])->name('SearchServiceType.ssearch');
 Route::get('/search_service_type', [ServiceTypeController::class, 'ssearch']);



 Route::post('/create_request', [RequestController::class, 'save']);
 Route::get('/show_request', [RequestController::class, 'get'])->name('ShowRequest.get');
 Route::post('/search_request', [RequestController::class, 'ssearch'])->name('SearchRequest.ssearch');
 Route::get('/search_request', [RequestController::class, 'ssearch']);




 Route::get('send-mail', [RequestMailController::class, 'index']);



 Route::get('/edit-profile', [ProfileController::class, 'index'])->name('Profile.index');
 Route::post('/edit-socialmedia', [ProfileController::class, 'saveSocial'])->name('Profile.saveSocial');
 Route::post('/edit-info', [ProfileController::class, 'saveInfo'])->name('Profile.updateInfo');
 Route::post('/edit-photo', [ProfileController::class, 'savePhoto'])->name('Profile.updatePhoto');
 Route::get('/delete-photo/{id}',[ProfileController::class,'delete']);




 Route::post('/create_property', [PropertyController::class, 'save']);



 Route::post('/advence-search', [SearchController::class,'search'])->name('advance-search');



Route::view('/datatable-testing','datatable-testing');
