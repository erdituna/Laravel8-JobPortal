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
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/jobs/{id}/{slug}', [HomeController::class, 'jobs'])->name('jobs');
Route::get('/categoryjobs/{id}/{slug}', [HomeController::class, 'categoryjobs'])->name('categoryjobs');
Route::post('/getjobs', [HomeController::class, 'getjobs'])->name('getjobs');
Route::post('/productlist/{search}', [HomeController::class, 'productlist'])->name('productlist');




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
    Route::prefix('message')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::get('/edit{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('/show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');

    });
# Jobs Image Gallery
    Route::prefix('image')->group(function () {

        Route::get('/create/{jobs_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('/store/{jobs_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('/delete/{id}/{jobs_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('/show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');

    });
    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

    #Faq
    Route::prefix('faq')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
        Route::get('/create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('/store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
        Route::get('/edit{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('/show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faqs_show');

    });


});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('userprofile');

});




//admin

Route::get('admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
