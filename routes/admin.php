<?php

use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\Home\BannerController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\PortfolioDetails;
use App\Http\Controllers\Home\PortofolioController;
use App\Http\Controllers\Home\ServiceController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {

    // Admin Routes
Route::prefix('admin')->group(function () {

    Route::controller(AdminController::class)->group(function () {
        Route::get('/logout', 'destroy')->name('admin.logout');
        Route::get('/profile', 'profile')->name('admin.profile');
        Route::get('/profile/edit', 'editProfile')->name('edit.profile');
        Route::post('/profile/update/{id}', 'updateProfile')->name('admin.update_profile');
        Route::get('/changepass', 'changePassword')->name('password.change');
        Route::post('/updatepass', 'updatePassword')->name('password_update');
    });

    Route::controller(BannerController::class)->group(function () {
        Route::get('/home_banner', 'index')->name('edit.banner');
        Route::post('update_banner', 'updateBanner')->name('update.banner');
    });

    Route::controller(AboutController::class)->group(function () {
        Route::get('edit/about', 'editAbout')->name('edit.about');
        Route::post('/update_about', 'updateAbout')->name('update.about');
        Route::get('/multi_image', 'multiImageView')->name('about.multi_image');
        Route::post('/store/multi_icons', 'storeMultiIcons')->name('store.multi_icons');
        Route::get('/about/view_multi_icons', 'multiIconsPage')->name('about.view_multi_icons');
        Route::get('/edit_icon/{id}', 'editIcon')->name('about.edit_icon');
        Route::post('update_icon', 'updateIcon')->name('update.about_icon');
        Route::get('/delete_icon/{id}', 'deleteIcon')->name('about.delete_icon');
    });

    Route::controller(PortofolioController::class)->group(function () {
        Route::get('/all_portofolio', 'allPortofolio')->name('all.portofolio');
        Route::get('/add_portofolio', 'addPortoflio')->name('add_portofolio');
        Route::post('/store_portofolio', 'store')->name('store.portofolio');
        Route::get('/edit_portofolio/{id}', 'editPortofolio')->name('edit.portofolio');
        Route::post('/update_portofolio', 'updatePortofolio')->name('update.portofolio');
        Route::get('/delete_portofolio/{id}', 'delete')->name('delete.portofolio');

    });

    Route::controller(BlogCategoryController::class)->group(function () {
        Route::get('/blog_categories', 'allCategories')->name('blog.categories');
        Route::get('/add/category', 'addCategory')->name('add_blog_category');
        Route::post('/store_category', 'storeCategory')->name('store.category');
        Route::get('/edit/category/{id}', 'editCategory')->name('edit.category');
        Route::post('/update/category', 'updateCategory')->name('update.category');
        Route::get('/delete/category/{id}', 'deleteCategory')->name('delete.category');
    });

    Route::controller(BlogController::class)->group(function () {
        Route::get('/blogs', 'allBlogs')->name('all.blogs');
        Route::get('/blogs/add', 'addBlog')->name('add_blog');
        Route::post('/store/blog', 'storBlog')->name('store.blog');
        Route::get('/blog_edit/{id}', 'editBlog')->name('edit.blog');
        Route::post('/update_blog', 'updateBlog')->name('update.blog');
        Route::get('/delete_blog/{id}', 'deleteBlog')->name('delete.blog');
    });

    Route::controller(FooterController::class)->group(function () {
        Route::get('/footer', 'index')->name('footer.display');
        Route::get('/edit_footer/{id}', 'editFooter')->name('edit.footer');
        Route::post('/update_footer', 'updateFooter')->name('update.footer');
    });

    Route::controller(ContactController::class)->group(function () {
        Route::get('/messages', 'feedbackMsg')->name('feedback.messages');
        Route::get('/delete_msg/{id}', 'deleteMsg')->name('delete.message');
    });

    Route::controller(ServiceController::class)->group(function () {
        Route::get('/services', 'index')->name('admin.services');
        Route::get('add-service', 'addService')->name('add.service');
        Route::post('/store_service', 'storeService')->name('store.service');
        Route::get('/edit-service/{id}', 'editService')->name('edit.service');
        Route::post('/update-service', 'updateService')->name('update.service');
        Route::get('/delete-service/{id}', 'deleteService')->name('delete.service');
    });

});


});

