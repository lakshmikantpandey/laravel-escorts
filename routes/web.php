<?php

use App\Http\Controllers\Controller;
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

//Pages
Route::get('/', [Controller::class, 'home'])->name('home');

Route::get('/models', [Controller::class, 'models'])->name('models');

Route::get('/gallery', [Controller::class, 'gallery'])->name('gallery');

Route::get('/about', [Controller::class, 'about'])->name('about');

Route::get('/pricing', [Controller::class, 'pricing'])->name('pricing');

Route::get('/contact', [Controller::class, 'contact'])->name('contact');

Route::get('login', [Controller::class, 'showLoginForm'])->name('login');
Route::post('login', [Controller::class, 'login']);

Route::get('/logout', [Controller::class, 'logout'])->name('logout');

Route::post('/enquiry', [EnquiryController::class, 'createEnquiry'])->name('enquiry');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin');

    // Categories
    Route::post('/categories', [CategoryController::class, 'createCategory'])->name('createCategory');
    Route::post('/update-category/{id}', [CategoryController::class, 'updateCategory'])->name('updateCategory');
    Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory']);
    Route::get('/categories', [CategoryController::class, 'showCategories']);

    // Banners
    Route::post('/banners', [BannersController::class, 'createBanner'])->name('createBanner');
    Route::post('/update-banner/{id}', [BannersController::class, 'updateBanner'])->name('updateBanner');
    Route::get('/delete-banner/{id}', [BannersController::class, 'deleteBanner']);
    Route::get('/banners', [BannersController::class, 'showBanners']);

    // Models
    Route::get('/models', [ModelsController::class, 'showModels']);
    Route::post('/models', [ModelsController::class, 'createModel'])->name('createModel');
    Route::post('/edit-model/{id}', [ModelsController::class, 'editModel'])->name('editModel');
    Route::get('/delete-model/{id}', [ModelsController::class, 'deleteModel']);

    // Rates
    Route::post('/rates', [RatesController::class, 'createRate'])->name('rates');
    Route::get('/delete-rates/{id}', [RatesController::class, 'deleteRates']);
    Route::get('/rates', [RatesController::class, 'showRates']);

    // Enquiries
    Route::get('/delete-enquiry/{id}', [EnquiryController::class, 'deleteEnquiry']);
    Route::get('/enquiries', [EnquiryController::class, 'showEnquiry']);

});