<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
//Category

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
    Route::prefix('jobs')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\JobsController::class, 'index'])->name('admin_jobs');
        Route::get('/create', [\App\Http\Controllers\Admin\JobsController::class, 'create'])->name('admin_jobs_add');
        Route::post('/store', [\App\Http\Controllers\Admin\JobsController::class, 'store'])->name('admin_jobs_store');
        Route::get('/edit{id}', [\App\Http\Controllers\Admin\JobsController::class, 'edit'])->name('admin_jobs_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\JobsController::class, 'update'])->name('admin_jobs_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\JobsController::class, 'destroy'])->name('admin_jobs_delete');
        Route::get('/show', [\App\Http\Controllers\Admin\JobsController::class, 'show'])->name('admin_jobs_show');

    });
# Jobs Image Gallery
    Route::prefix('image')->group(function () {

        Route::get('/create/{jobs_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('/store/{jobs_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('/show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');

    });

});
//admin

Route::get('admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'login'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
