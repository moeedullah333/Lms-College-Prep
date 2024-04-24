<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Web\CheckoutController;
use App\Http\Controllers\Web\WebsiteController;
use Illuminate\Support\Facades\Route;

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

Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/blogs','blog_page')->name('web.blog.page');
    Route::get('/blog-detail/{blog_id}','blog_detail_page')->name('web.blog.detail.page');
    Route::post('/blog-comment/{blog_id}','blog_comment')->name('web.blog.comment');
    Route::get('/virtual-classes','course_listing_page')->name('web.course.listing.page');
    Route::get('/virtual-classes-detail/{course_id}','virtual_classes_detail_page')->name('web.course.deatil.page');
    Route::get('/cart','cart_page')->name('web.cart.page');
    Route::get('/checkout','checkout_page')->name('web.checkout.page');
});

Route::controller(CheckoutController::class)->group(function () {
    Route::post('/checkout','checkout')->name('web.checkout.form');
    Route::get('/thank-you','thankyou_page')->name('web.thank-you.page');
});

Route::middleware(['web', 'admin', 'RevalidateBackHistory'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin-dashboard', 'index')->name('admin.home');
        //User Managment
        Route::get('/students-records', 'user_listing')->name('admin.user_listing.page');
        Route::get('/add-user', 'user_add_page')->name('admin.user.add.page');
        Route::get('/update-user/{user_id}', 'user_update_page')->name('admin.user.update.page');
        Route::post('/add-update-user/{user?}', 'user_add_update')->name('admin.add.update.user');
        Route::get('/user-delete/{user_id}', 'user_delete')->name('admin.delete.user');
        //Admin Managment
        Route::get('/admin-records', 'admin_listing')->name('admin.admin_listing.page');
        Route::get('/add-admin', 'admin_add_page')->name('admin.admin.add.page');
        Route::get('/update-admin/{user_id}', 'admin_update_page')->name('admin.admin.update.page');
        Route::post('/add-update-admin/{user?}', 'admin_add_update')->name('admin.add.update.admin');
        Route::get('/admin-delete/{user_id}', 'admin_delete')->name('admin.delete.admin');
        //Blogs Managment
        Route::get('/blogs-records', 'blog_listing')->name('admin.blog_listing.page');
        Route::get('/add-blog', 'blog_add_page')->name('admin.blog.add.page');
        Route::get('/update-blog/{blog_id}', 'blog_update_page')->name('admin.blog.update.page');
        Route::post('/add-update-blog/{blog?}', 'blog_add_update')->name('admin.add.update.blog');
        Route::get('/blog-delete/{blog_id}', 'blog_delete')->name('admin.delete.blog');
        //Course Managment
        Route::get('/course-listing','course_listing')->name('admin.course.listing.page');
        route::get('/add-course','course_add_page')->name('admin.course.add.page');
        Route::get('/update-course/{course_id}', 'course_update_page')->name('admin.course.update.page');
        Route::post('/add-update-course/{course?}','course_add_update')->name('admin.course.add.update');
        Route::get('/course-delete/{course_id}', 'course_delete')->name('admin.delete.course');

        //Order Managment
        Route::get('/order-listing','order_listing_page')->name('admin.order.listing.page');
        Route::get('/order-items-listing-page/{order_id}','order_items_listing_page')->name('admin.order.items.listing.page');
        Route::get('/get-order/{order_id}','get_order')->name('admin.order.get');
        Route::post('order-edit/{order_id}','order_status_edit')->name('admin.order.status.edit');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register_page')->name('web.register.page');
    route::get('/login', 'login_page')->name('web.login.page');
    Route::post('/user-state', 'getStates')->name('user.register.getStates');
    Route::post('/user-login-form', 'loginForm')->name('login.form');
    Route::post('/user-register-form', 'registerForm')->name('register.form');
    Route::get('/user-logout', 'logout')->name('user.logout');
});
