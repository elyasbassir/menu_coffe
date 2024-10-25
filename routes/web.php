<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view_controller;
use App\Http\Controllers\authentication_controller;
use App\Http\Middleware\Access_page_middleware;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\products_owner;
use App\Models\products_model;
use App\Http\Controllers\template;
use App\Http\Controllers\theme;
use App\Http\Controllers\payment;
use App\Http\Controllers\category_controller;


//middleware(Access_page_middleware::class.":admin#owner#user")
Route::get('/', [view_controller::class, 'main_page']);
Route::get('/menu/{code_coffee}', [view_controller::class, 'menu_coffee'])->name('menu_coffee');

//////////////sign out
Route::get('/sign_out', [authentication_controller::class, 'sign_out'])->name('sign_out');
/////// authentication
Route::POST('/register_user', [authentication_controller::class, 'register'])->name('register_user');
Route::POST('/login_user', [authentication_controller::class, 'login'])->name('login_user');

Route::get('/login', [view_controller::class, 'login'])->name('form_login');
Route::get('/register', [view_controller::class, 'register'])->name('register');
////////////////////dashboard
Route::group(['middleware' => Access_page_middleware::class . ":admin", 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [view_controller::class, 'dashboard'])->name('dashboard');
    Route::get('/manage_template', [view_controller::class, 'manage_template'])->name('manage_template');
    Route::get('/manage_theme', [view_controller::class, 'manage_theme'])->name('manage_theme');
//////////////////// add owner in database
    Route::get('/add_owner', [view_controller::class, 'add_owner'])->name('add_owner');
    Route::POST('/new_owner', [admin_controller::class, 'new_owner'])->name('new_owner');

//add new and remove template and theme
    Route::POST('/add_template', [template::class, 'add_template'])->name('add_template');
    Route::POST('/add_theme', [theme::class, 'add_theme'])->name('add_theme');
    Route::DELETE('/delete_theme', [theme::class, 'delete_theme'])->name('delete_theme');
    Route::DELETE('/delete_template', [template::class, 'delete_template'])->name('delete_template');



});


///////////////////////// manage product
Route::group(['middleware' => Access_page_middleware::class . ":owner", 'prefix' => 'owner', 'as' => 'owner.'], function () {
    Route::get('/manage_product', [view_controller::class, 'manage_product'])->name('manage_product_owner');
    Route::DELETE('/delete_product_owner',[products_owner::class,'delete_product_owner'])->name('delete_product_owner');
    Route::get('/new_products', [view_controller::class, 'new_products'])->name('new_products_owner');
    Route::get('/edit_product/{product_id}', [view_controller::class, 'edit_product_owner'])->name('edit_product_owner');
    Route::get('/setting', [view_controller::class, 'setting'])->name('setting');
    Route::get('/subscription', [view_controller::class, 'subscription'])->name('subscription');
    Route::POST('/add_product', [products_owner::class, 'add_product'])->name('add_product');
    Route::POST('/edit_product', [products_owner::class, 'edit_product'])->name('edit_product');
    //    بروزرسانی اطلاعات قالب منو فروشنده
    Route::PUT('/update_setting', [products_owner::class, 'update_setting'])->name('update_setting');


    Route::GET('/payment',[payment::class,'redirect_to_bank'])->name('redirect_to_bank');
    Route::GET('/call_back/{payment_id}',[payment::class,'call_back'])->name('call_back');

    ////////////مدریت دسته بندی محصولات
    Route::get('category_product',[category_controller::class,'category_product'])->name('category_product');
    Route::get('edit_category/{product_id}',[category_controller::class,'edit_category'])->name('edit_category');
    Route::post('add_category',[category_controller::class,'add_category'])->name('add_category');
    Route::POST('edit_category',[category_controller::class,'edit_category_post'])->name('edit_category_post');
    Route::get('delete_category/{category_id}',[category_controller::class,'delete_category'])->name('delete_category');

});



//روت های مدیریت پرداخت
//Route::post();



