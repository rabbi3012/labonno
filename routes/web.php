<?php

use GuzzleHttp\Middleware;
use Psy\TabCompletion\AutoCompleter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\BrandsController;
use App\Http\Controllers\backend\ProductContoller;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\backend\SubcategoryController;
use Illuminate\Routing\Controllers\Middleware as ControllersMiddleware;

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

//payment//

// SSLCOMMERZ Start
//Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
//Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('payment');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
//payment end//


//frontend
Route::get('/',[HomeController::class,'home'])->name('home');



Route::post('/front_reg_submit',[HomeController::class,'regsubmit'])->name('reg.submit');
Route::post('front_login',[HomeController::class,'frontlogin'])->name('front.login');
Route::get('/front_logout',[HomeController::class,'frontlogout'])->name('front.logout');

//reg and login and log out backend
Route::get('/registration',[AuthController::class,'regform'])->name('regform');
Route::post('/reg-form-submit',[AuthController::class,'regformsubmit'])->name('regform.submit');
Route::get('/login',[AuthController::class,'login'])->name('login.form');
Route::post('/login-store',[AuthController::class,'store'])->name('admin.login');


Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/search',[HomeController::class,'search'])->name('search');

Route::get('add-to-cart/{id}',[CartController::class,'addToCart'])->name('addToCart');
Route::get('/cartview',[CartController::class,'views'])->name('cart.view');
Route::get('/update/{id}',[CartController::class,'update'])->name('update');
Route::get('/delete/{id}',[CartController::class,'Delete'])->name('Delete');
Route::get('/checkout',[CartController::class,'checkout'])->name('check.out');

//middleware
Route::group(['middleware' =>['auth',"checkAdmin"]],function(){


//logout
    Route::get('/log-out',[AuthController::class,'logout'])->name('logout');
//all routes
    Route::get('/admin',[AdminController::class,'master'])->name('admin');
    Route::get('/admin-dashboard',[AdminController::class,'page'])->name('admin.dashboard');
    
    Route::get('/category-list',[CategoryController::class,'list'])->name('list');
    Route::get('/category-form',[CategoryController::class,'form'])->name('form');
    Route::post('/category-create',[CategoryController::class,'submit'])->name('category.create');
    Route::get('/category/delete/{category_id}',[CategoryController::class,'delete'])->name('category.delete');
    Route::get('/category/edit/{category_id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/update/{category_id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category/view/{category_id}',[CategoryController::class,'viewCategory'])->name('category.view');
    
    Route::get('/subcategory-list',[SubcategoryController::class,'listed'])->name('listed');
    Route::get('/subcategory-form',[SubcategoryController::class,'formed'])->name('formed');
    Route::post('/subcategory-create',[SubcategoryController::class,'submited'])->name('subcategory.create');
    Route::get('/subcategory/delete/{subcategory_id}',[SubcategoryController::class,'deleted'])->name('subcategory.delete');
    Route::get('/subcategory/view/{subcategory_id}',[SubcategoryController::class,'viewsubcategory'])->name('subcategory.view');
    Route::get('/subcategory/edit/{subcategory_id}',[SubcategoryController::class,'subedit'])->name('subcategory.edit');
    Route::post('/subcategory/update/{subcategory_id}',[SubcategoryController::class,'updated'])->name('subcategory.update');
    
    Route::get('/brands',[BrandsController::class,'list'])->name('brand.list');
    Route::get('/brand/create',[BrandsController::class,'create'])->name('brand.create');
    Route::post('/brand/store',[BrandsController::class,'store'])->name('brand.store');
    Route::get('/brand/view/{brands_id}',[BrandsController::class,'view'])->name('brand.view');
    Route::get('/brand/delete/{brands_id}',[BrandsController::class,'delete'])->name('brand.delete');
    Route::get('/brand/edit/{brands_id}',[BrandsController::class,'edit'])->name('brand.edit');
    Route::post('/brand/update/{brands_id}',[BrandsController::class,'update'])->name('brand.update');
    
    Route::get('/product',[ProductContoller::class,'list'])->name('product.list');
    Route::get('/product/create',[ProductContoller::class,'create'])->name('product.create');
    Route::post('/product/store',[ProductContoller::class,'store'])->name('product.store');
    Route::get('/product/view/{product_id}',[ProductContoller::class,'view'])->name('product.view');
    Route::get('/product/delete/{product_id}',[ProductContoller::class,'delete'])->name('product.delete');
    Route::get('/product/edit/{product_id}',[ProductContoller::class,'edit'])->name('product.edit');
    Route::post('/product/update/{product_id}',[ProductContoller::class,'update'])->name('product.update');
    
    Route::get('/customer',[CustomerController::class,'list'])->name('customer.list');
    Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
    Route::post('/customer/store',[CustomerController::class,'store'])->name('customer.store');
    Route::get('/customer/view/{customer_id}',[CustomerController::class,'view'])->name('customer.view');
    Route::get('/customer/delete/{customer_id}',[CustomerController::class,'delete'])->name('customer.delete');
    Route::get('/customer/edit/{customer_id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('/customer/update/{customer_id}',[CustomerController::class,'update'])->name('customer.update');
    
    Route::get('/user-table',[UserController::class,'user'])->name('user.tabel');
    
    
    
    
    
    
});

