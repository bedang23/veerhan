<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact/submit', [ContactController::class, 'store'])->name('contact.submit');

Route::prefix('services')->group(function () {
    Route::view('/web-design-development', 'web-development-service')->name('services.web-development');
    Route::view('/seo-digital-marketing', 'seo-service')->name('services.seo-digital');
    Route::view('/search-engine-optimization', 'seo-service')->name('services.seo');
    Route::view('/digital-marketing', 'seo-service')->name('services.digital-marketing');
    Route::view('/web-security-protection', 'web-security-service')->name('services.web-security');
    Route::view('/ui-ux-design-branding', 'ui-ux-service')->name('services.ui-ux');
    Route::view('/ai-implementation', 'ai-implementation-service')->name('services.ai');
});

// Admin Panel Routes
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/admin', function() {
    return redirect()->route('admin.dashboard');
});
