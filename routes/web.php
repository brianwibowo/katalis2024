<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\SensorController;

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
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth:admin')->name('admin.index');

// Route lainnya (pastikan rute-rute ini memerlukan autentikasi jika diperlukan)
Route::get('/statistics', function () {
    return view('admin.statistics');
})->middleware('auth:admin');

Route::get('/components', function () {
    return view('admin.components');
})->middleware('auth:admin');

Route::get('/history', function () {
    return view('admin.history');
})->middleware('auth:admin');

Route::get('/notifications', function () {
    return view('admin.notifications');
})->middleware('auth:admin');

Route::get('/recommender', function () {
    return view('admin.recommender');
})->middleware('auth:admin');

Route::get('/api/sensor-data', [SensorController::class, 'fetchSensorData'])->name('sensor.data');