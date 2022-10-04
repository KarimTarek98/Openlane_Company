<?php

use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\PortofolioController;
use App\Http\Controllers\Home\ServiceController;
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
    return view('app.index');
})->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/portfolio/details/{id}', [PortofolioController::class, 'portfolioDetails'])->name('portfolio.details');
Route::get('portfolio', [PortofolioController::class, 'showPortfolio'])->name('home.portfolio');

Route::get('/blog_details/{id}', [BlogController::class, 'blogDetails'])->name('blog.details');

Route::get('/category/blogs/{id}', [BlogController::class, 'categoryBlogs'])
->name('category.blogs');
Route::get('/blogs', [BlogController::class, 'blogs'])->name('all_blogs');

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contactPage')->name('contact');
    Route::post('/send_message', 'sendMessage')->name('send.message');
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('/services', 'allServices')->name('all.services');
    Route::get('/service-details/{id}', 'serviceDetails')->name('service.details');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
