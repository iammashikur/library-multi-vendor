<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\LibraryController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\LibraryPaymentController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrderReportController;
use App\Http\Controllers\Admin\PdfController;
use App\Models\OrderReport;
use Illuminate\Support\Facades\Auth;
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


// Home Page
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');

// Blog
Route::get('/blogs', [App\Http\Controllers\FrontendController::class, 'blogs'])->name('blogs');
Route::get('/blog/{slug}', [App\Http\Controllers\FrontendController::class, 'blog_show'])->name('blog_show');

// Library
Route::get('/libraries', [App\Http\Controllers\FrontendController::class, 'search_libraries'])->name('search_libraries');
Route::get('/library/{id}', [App\Http\Controllers\FrontendController::class, 'library_show'])->name('library_show');


Route::get('/book/{id}', [App\Http\Controllers\FrontendController::class, 'book_show'])->name('book_show');

// Cart
Route::get('/mycart', [App\Http\Controllers\FrontendController::class, 'cart_show'])->name('cart_show');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/addtocart/{id}', [App\Http\Controllers\FrontendController::class, 'cart_add'])->name('cart_add');
    Route::get('/removecart/{id}', [App\Http\Controllers\FrontendController::class, 'cart_remove'])->name('cart_remove');


});




// Location
Route::get('/districts', [App\Http\Controllers\FrontendController::class, 'districts'])->name('districts');
Route::get('/cities', [App\Http\Controllers\FrontendController::class, 'cities'])->name('cities');




/**
 *  Admin Routes Starts here
 */

Route::group(['middleware' => ['role:admin|writer|manager|librarian|volunteer'],'prefix' => 'admin', 'as' => 'admin.'], function(){
  // Dashboard Route
  Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');

  // Category Routes
  Route::resource('/category', CategoryController::class);

  // Post Routes
  Route::resource('/blog', BlogController::class);

  // Library Routes
  Route::resource('/library', LibraryController::class);

  // Books Routes
  Route::resource('/book', BookController::class);

  // Order Routes
  Route::resource('/order', OrderController::class);

  // Order Report Routes
  Route::post('/order-report/search', [OrderReportController::class, 'search'])->name('order-report.search');
  Route::resource('/order-report', OrderReportController::class);

  // admin pdf Routes
  Route::resource('/pdf', PdfController::class);

  // Library Payment Routes
  Route::resource('/library-payment', LibraryPaymentController::class);








// Route::get('/dashboard', [DashboardController::class, 'Dashboard']);
// Route::get('/settings', [DashboardController::class, 'Settings']);

});



Auth::routes();


