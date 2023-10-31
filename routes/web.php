<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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
// this is main file
Route::view('/', 'welcome');

// view data crud
Route::get('/login-form',        [ViewController::class, 'loginForm'])->name('login.form');
Route::get('/page-summary',      [ViewController::class, 'pageSummary'])->name('page.summary');
Route::get('/add-page',          [ViewController::class, 'addPage'])->name('add.page');
Route::get('/category-summary',  [ViewController::class, 'categorySummary'])->name('category.summary');
Route::get('/add-category',      [ViewController::class, 'addCategory'])->name('add.category');
Route::get('/product-summary',   [ViewController::class, 'productSummary'])->name('product.summary');
Route::get('/add-product',       [ViewController::class, 'addProduct'])->name('add.product');
Route::get('/password',          [ViewController::class, 'password'])->name('password');


// for login route
Route::post('/login-data', [LoginController::class, 'loginData'])->name('login.data');
Route::get('/logout',      [LoginController::class, 'logout'])->name('logout');

// add page crud satrt here
Route::post('/add-page-data',   [AdminController::class, 'addPageData'])->name('add.page.data');
Route::get('delete-data/{id}',  [AdminController::class, 'deleteData']);
Route::get('edit-display/{id}', [AdminController::class, 'editDisplay']);
Route::post('edit-data/{id}',   [AdminController::class, 'editData']);
Route::post('/search',          [AdminController::class, 'search'])->name('search');


// add category crud start here
Route::post('/add-category-data',        [AdminController::class, 'addCategoryData'])->name('add.category.data');
Route::get('category-delete-data/{id}',  [AdminController::class, 'categoryDeleteData']);
Route::get('category-edit-display/{id}', [AdminController::class, 'categoryEditDisplay']);
Route::post('category-edit-data/{id}',   [AdminController::class, 'categoryEditData']);
Route::post('/search-category',          [AdminController::class, 'searchCategory'])->name('search.category');


// change password here
Route::post('/change-password', [AdminController::class, 'changePassword'])->name('change.password');

// add products crud  start here
Route::post('/add-product-data',        [AdminController::class, 'addProductData'])->name('add.product.data');
Route::get('product-delete-data/{id}',  [AdminController::class, 'productDeleteData']);
Route::get('product-edit-display/{id}', [AdminController::class, 'productEditDisplay']);
Route::post('product-edit-data/{id}',   [AdminController::class, 'productEditData']);
Route::post('/search-product',          [AdminController::class, 'searchProduct']);
