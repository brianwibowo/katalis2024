<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ComponentsController;
use App\Http\Controllers\Admin\StatisticsController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\NotificationsController;
use App\Http\Controllers\Admin\RecommenderController;

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
Route::get('storage/image/{width}/{height}/{image_path}', 'Admin\UploadController@readMedia')->where('image_path', '.*')->name('admin.media.fetch');
Route::get('media/image/{image_path}', 'Admin\UploadController@readOriginalMedia')->where('image_path', '.*')->name('admin.media.original');

// Route halaman login (welcome page)
Route::get('/', [LoginController::class, 'login'])->name('login');

// Route untuk menangani aksi login
Route::post('/login', [LoginController::class, 'doLogin'])->name('admin.post_login');

// Route ke dashboard dengan middleware `auth`
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Route untuk halaman lainnya dengan controller masing-masing
Route::get('/statistics', [StatisticsController::class, 'index'])->name('admin.statistics');
Route::get('/components', [ComponentsController::class, 'index'])->name('admin.components');
Route::get('/history', [HistoryController::class, 'index'])->name('admin.history');
Route::get('/notifications', [NotificationsController::class, 'index'])->name('admin.notifications');
Route::get('/recommender', [RecommenderController::class, 'index'])->name('admin.recommender');

