<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSlideController;
use App\Http\Controllers\FrontendController;

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


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

//Admin all Route
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'profile')->name('admin.profile');
    Route::get('/edit/profile', 'editprofile')->name('edit.profile');
    Route::post('/store/profile', 'storeprofile')->name('store.profile');

    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
});

//Home all Route
Route::controller(HomeSlideController::class)->group(function () {
    Route::get('/home/slider', 'HomeSlider')->name('home.slider');
    Route::post('/update/slider/{id}', 'UpdateSlider')->name('update.slider');
});










//Frontend all Route
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('frontend.index');
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::get('/service/page', 'servicePage')->name('service.page');
    Route::get('/portfolio/page', 'portfolioPage')->name('portfolio.page');
    Route::get('/portfolio/details', 'portfolioDetailsPage')->name('portfolio.details.page');
    Route::get('/blog/news/page', 'blogNewsPage')->name('blog.news.page');
    Route::get('/blog/news/details', 'blogNewsDetails')->name('blogNews.details');
    Route::get('/contact/page', 'contactPage')->name('contact.page');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
