<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\AuthorController as AdminAuthorController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\CaseStudyController as AdminCaseStudyController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact/submit', [ContactController::class, 'store'])->name('contact.submit');

// Services
Route::prefix('services')->group(function () {
    Route::view('/web-design-development', 'web-development-service')->name('services.web-development');
    Route::view('/seo-digital-marketing', 'seo-service')->name('services.seo-digital');
    Route::view('/search-engine-optimization', 'seo-service')->name('services.seo');
    Route::view('/digital-marketing', 'seo-service')->name('services.digital-marketing');
    Route::view('/web-security-protection', 'web-security-service')->name('services.web-security');
    Route::view('/ui-ux-design-branding', 'ui-ux-service')->name('services.ui-ux');
    Route::view('/ai-implementation', 'ai-implementation-service')->name('services.ai');
});

// Blogs (public)
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');

// Case Studies (public)
Route::get('/case-studies', [CaseStudyController::class, 'index'])->name('case-studies.index');
Route::get('/case-studies/{slug}', [CaseStudyController::class, 'show'])->name('case-studies.show');

// Admin Panel
Route::prefix('admin')->name('admin.')->group(function () {

    // Guest-only routes (login)
    Route::middleware('admin.guest')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    });

    // Redirect /admin → dashboard
    Route::get('/', fn () => redirect()->route('admin.dashboard'));

    // Authenticated admin routes
    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::resource('authors', AdminAuthorController::class)->except(['show']);
        Route::resource('categories', AdminCategoryController::class)->except(['show']);
        Route::resource('blogs', AdminBlogController::class)->except(['show']);
        Route::resource('case-studies', AdminCaseStudyController::class)->except(['show']);
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    });
});
