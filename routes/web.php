<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;

// Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');

// Giới thiệu
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Sản phẩm
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

// Dịch vụ
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');

// Dự án
Route::get('/project', [ProjectController::class, 'index'])->name('project.index');

// Tin tức
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

// Liên hệ
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/lien-he', function () {
    return view('contact');
});
// Xử lý form Liên hệ (POST)
Route::post('/lien-he', [ContactController::class, 'store'])->name('contact.store');