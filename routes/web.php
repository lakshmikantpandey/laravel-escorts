<?php

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
Route::get('/categories', function () {
    return view('admin/pages.categories');
});
Route::get('/banners', function () {
    return view('admin/pages.banners');
});
Route::get('/models', function () {
    return view('admin/pages.models');
});
Route::get('/rates', function () {
    return view('admin/pages.rates');
});
Route::get('/enquiries', function () {
    return view('admin/pages.enquiries');
});
