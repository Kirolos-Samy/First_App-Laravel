<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});

//////////////
// Admin //

// Route::get('/admins', [AdminController::class,'getAdmins']);
// // Route::get('/admins', 'AdminController@getAdmins');
// Route::get('/admins/show/{id}' , [AdminController::class,'getAdmin'])->name('admin.getAdmin');
// Route::delete('/admins/delete/{id}' , [AdminController::class,'destroy'])->name('admin.destroy');
// Route::get('/admins/{id}' , [AdminController::class,'getAdmin'])->name('admin.getAdmin');
// Route::delete('/admins/{id}' , [AdminController::class,'destroy'])->name('admin.destroy');
// Route::get('/admins/showall' , [AdminController::class,'getAll']);



////////////////
// Customers //

// Show view to add new customer
Route::view('/customers/create','Customers.create')->name('customer.create');

// Show All Customers
Route::get('/customers',[CustomerController::class,'index'])->name('customer.index');

// Delete Customer
Route::delete('/customers/delete/{id}',[CustomerController::class,'destroy'])->name('customer.destroy');

// Show 1 Customer
Route::get('/customers/{id}',[CustomerController::class,'show'])->name('customer.show');

// Get data of customer to Update
Route::get('/customers/update/{id}',[CustomerController::class,'update'])->name('customer.update');

// Edit Customer
Route::put('/customers/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');

// Add new Customer
Route::post('/customers/store',[CustomerController::class,'store'])->name('customer.store');



///////////////
// Products //

// Show view to add new product
Route::view('/products/create','Products.create')->name('product.create');

// Show All Products
Route::get('/products',[ProductController::class,'index'])->name('product.index');

// Delete Product
Route::delete('/products/delete/{id}',[ProductController::class,'destroy'])->name('product.destroy');

// Show 1 Product
Route::get('/products/{id}',[ProductController::class,'show'])->name('product.show');

// Get data of product to Update
Route::get('/products/update/{id}',[ProductController::class,'update'])->name('product.update');

// Edit Product
Route::put('/products/edit/{id}',[ProductController::class,'edit'])->name('product.edit');

// Add new Product
Route::post('/products/store',[ProductController::class,'store'])->name('product.store');




/////////////////
// Categories //

// Show view to add new product
Route::view('/categories/create','Categories.create')->name('category.create');

// Show All Categories
Route::get('/categories',[CategoryController::class,'index'])->name('category.index');

// Show 1 Category
Route::get('/categorys/{id}',[CategoryController::class,'show'])->name('category.show');

// Get data of category to Update
Route::get('/categories/update/{id}',[CategoryController::class,'update'])->name('category.update');

// Edit category
Route::put('/categories/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');

// Delete Category
Route::delete('/categories/delete/{id}',[CategoryController::class,'destroy'])->name('category.destroy');

// Add new Product
Route::post('/categories/store',[CategoryController::class,'store'])->name('category.store');


/////////////
// Orders //

// Show All Orders
Route::get('/orders',[OrderController::class,'index'])->name('order.index');

// Show 1 Order
Route::get('/orders/{id}',[OrderController::class,'show'])->name('order.show');




