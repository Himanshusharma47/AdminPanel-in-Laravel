<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
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

Route::view('/', 'welcome');

Route::get('/login-form', [ViewController::class, 'login_form'])->name('login.form');

Route::get('/page-summary',  [ViewController::class, 'page_summary'])->name('page.summary');

Route::get('/add-page',  [ViewController::class, 'add_page'])->name('add.page');

Route::get('/category-summary',  [ViewController::class, 'category_summary'])->name('category.summary');

Route::get('/add-category',  [ViewController::class, 'add_category'])->name('add.category');

Route::get('/product-summary',  [ViewController::class, 'product_summary'])->name('product.summary');

Route::get('/add-product',  [ViewController::class, 'add_product'])->name('add.product');

Route::get('/change-password',  [ViewController::class, 'change_password'])->name('change.password');

