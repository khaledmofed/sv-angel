<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\PrincipleController;
use App\Http\Controllers\Admin\PortfolioAdminController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\FeaturedWorkController;
use App\Http\Controllers\Admin\ProcessStepController;
use App\Http\Controllers\Admin\BrandLogoController;
use App\Http\Controllers\Admin\BlogAdminController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\MissionController;
use App\Http\Controllers\Admin\AboutStoryController;

// ─── Frontend ────────────────────────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about/approach', [AboutController::class, 'approach'])->name('about.approach');
Route::get('/about/team', [AboutController::class, 'team'])->name('about.team');
Route::get('/faq', [AboutController::class, 'faq'])->name('faq');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// ─── Admin Auth ───────────────────────────────────────────────
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// ─── Admin (Protected) ────────────────────────────────────────
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', fn() => redirect()->route('admin.dashboard'));
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');

    Route::get('/hero', [HeroController::class, 'edit'])->name('hero.edit');
    Route::post('/hero', [HeroController::class, 'update'])->name('hero.update');

    Route::get('/mission', [MissionController::class, 'edit'])->name('mission.edit');
    Route::post('/mission', [MissionController::class, 'update'])->name('mission.update');

    Route::resource('principles', PrincipleController::class);
    Route::resource('about-stories', AboutStoryController::class);
    Route::resource('portfolio', PortfolioAdminController::class);
    Route::post('/portfolio/import', [PortfolioAdminController::class, 'import'])->name('portfolio.import');
    Route::resource('team', TeamController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('awards', AwardController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('featured-works', FeaturedWorkController::class);
    Route::resource('process', ProcessStepController::class);
    Route::resource('brands', BrandLogoController::class);
    Route::resource('blog', BlogAdminController::class);
    Route::resource('faqs', FaqController::class);

    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('messages.show');
    Route::post('/messages/{id}/read', [MessageController::class, 'markRead'])->name('messages.read');
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');
});
