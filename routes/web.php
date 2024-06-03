<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SslCommerzPaymentController;

// Route For Home Page
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

// Route For Sub Category Based Products
Route::get('/category-{categoryslug}/{subcategoryslug}', [App\Http\Controllers\Frontend\ProductController::class, 'showBySubCategory'])->name('products.subcategory');
Route::get('/details/category-{categoryslug}/{subcategoryslug}/{productslug}', [App\Http\Controllers\Frontend\ProductController::class, 'showDetails'])->name('products.subcategory.show');

// Route for Shop Product
Route::get('/shop', [App\Http\Controllers\Frontend\ShopController::class, 'shopIndex'])->name('shop.index');
Route::get('/shop/product-details/{productslug}', [App\Http\Controllers\Frontend\ShopController::class, 'shopDetails'])->name('shop.show');

// User Authentication
Route::get('login', [App\Http\Controllers\Frontend\UserController::class, 'showLoginForm'])->name('user.login');
Route::post('login-submit', [App\Http\Controllers\Frontend\UserController::class, 'login'])->name('user.login.submit');

Route::get('register', [App\Http\Controllers\Frontend\UserController::class, 'showRegisterForm'])->name('user.register');
Route::post('register', [App\Http\Controllers\Frontend\UserController::class, 'register'])->name('user.register.submit');

Route::get('logout', [App\Http\Controllers\Frontend\UserController::class, 'logout'])->name('user.logout');

Route::get('profile', [App\Http\Controllers\Frontend\ProfileController::class, 'userProfile'])->name('user.profile');
Route::get('address', [App\Http\Controllers\Frontend\ProfileController::class, 'address'])->name('address');
Route::post('add-address', [App\Http\Controllers\Frontend\ProfileController::class, 'addAddress'])->name('add.address');

// Route For Product Cart
Route::post('cart/add/{id}', [App\Http\Controllers\Frontend\CartController::class, 'addToCart'])->name('add.cart');
Route::get('cart-product', [App\Http\Controllers\Frontend\CartController::class, 'index'])->name('cart.index');

// SSLCOMMERZ Start
Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

// Admin Panel Route
Route::prefix('admin')->group(function () {
	Route::get('/login', [App\Http\Controllers\Backend\AdminController::class, 'LoginForm'])->name('admin.login');
	Route::post('/login-processing', [App\Http\Controllers\Backend\AdminController::class, 'login'])->name('login.submit');

	Route::middleware('adminauth')->group(function() {

		Route::get('/dashboard', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('admin.dashboard');

		Route::post('/logout', [App\Http\Controllers\Backend\AdminController::class, 'adminLogout'])->name('logout');

	// Route For Category
		Route::resource('/category', App\Http\Controllers\Backend\CategoryController::class);
	// Route For SubCategory
		Route::resource('/sub-category', App\Http\Controllers\Backend\SubCategoryController::class);

	// Route For Product
		Route::resource('/product', App\Http\Controllers\Backend\ProductController::class);
		Route::put('/product/{id}/status', [App\Http\Controllers\Backend\StatusController::class, 'status'])->name('product.status');
		Route::put('/product/{id}/status', [App\Http\Controllers\Backend\StatusController::class, 'status'])->name('product.status');

		// Route For Order
		Route::get('/order-list', [App\Http\Controllers\Backend\OrderController::class, 'index'])->name('order.list');
		Route::put('/order/{id}/status', [App\Http\Controllers\Backend\OrderController::class, 'updateStatus'])->name('order.status');

	});
});

Route::fallback(function () {
	return response()->view('errors.404', [], 404);
});