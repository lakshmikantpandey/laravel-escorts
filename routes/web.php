<?php

use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\RatesController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/models', function () {
    return view('pages.models');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/pricing', function () {
    return view('pages.pricing');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::post('/categories',[CategoryController::class, 'createCategory'])->name('categories');
Route::get('/delete-categories/{id}',[CategoryController::class,'deleteCategory']);
Route::get('/categories',[CategoryController::class,'showCategories']);

Route::post('/banners',[BannersController::class, 'createBanner'])->name('banners');
Route::get('/delete-banners/{id}',[BannersController::class,'deleteBanners']);
Route::get('/banners',[BannersController::class,'showBanners']);

Route::post('/models',[ModelsController::class, 'createModel'])->name('models');
Route::get('/delete-models/{id}',[ModelsController::class,'deleteModels']);
Route::get('/models',[ModelsController::class,'showModels']);

Route::post('/rates',[RatesController::class, 'createRate'])->name('rates');
Route::get('/delete-rates/{id}',[RatesController::class,'deleteRates']);
Route::get('/rates',[RatesController::class,'showRates']);

Route::post('/enquiry',[EnquiryController::class, 'createEnquiry'])->name('enquiry');
Route::get('/delete-enquiry/{id}',[EnquiryController::class,'deleteEnquiry']);
Route::get('/enquiries',[EnquiryController::class,'showEnquiry']);

