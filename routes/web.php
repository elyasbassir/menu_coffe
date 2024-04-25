<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view_controller;
use App\Http\Controllers\authentication_controller;
use App\Http\Middleware\Access_page_middleware;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\products_owner;
use App\Models\products_model;

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
Route::group(['middleware'=>Access_page_middleware::class . ":admin",'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [view_controller::class, 'dashboard'])->name('dashboard');
//////////////////// add owner in database
    Route::get('/add_owner', [view_controller::class, 'add_owner'])->name('add_owner');
    Route::POST('/new_owner', [admin_controller::class, 'new_owner'])->name('new_owner');
});


///////////////////////// manage product
Route::group(['prefix' => 'owner', 'as' => 'owner.'], function () {
    Route::get('/products', [products_owner::class, 'products'])->name('products_owner');
    Route::get('/manage_product', [products_owner::class, 'manage_product'])->name('manage_product_owner');
})->middleware(Access_page_middleware::class . ":owner");


