<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\LibraryController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\OrderController;
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

Route::group(['middleware' => 'auth','prefix' => 'admin', 'as' => 'admin.'], function(){
  // Dashboard Route
  Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');

  // Category Routes
  Route::resource('/category', CategoryController::class);

  // Post Rotues
  Route::resource('/blog', BlogController::class);

  // Library Routes
  Route::resource('/library', LibraryController::class);

  // Books Routes
  Route::resource('/book', BookController::class);

  // Books Routes
  Route::post('/order/change-status', [OrderController::class, 'changeStatus'])->name('order.status');
  Route::resource('/order', OrderController::class);





// Route::get('/dashboard', [DashboardController::class, 'Dashboard']);
// Route::get('/settings', [DashboardController::class, 'Settings']);  

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
