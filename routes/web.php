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
Route::get('/jobslist/{search}', [HomeController::class, 'jobslist'])->name('jobslist');




//Category

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::middleware('admin')->group(function () {
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
        Route::post('/store/', [\App\Http\Controllers\Admin\JobsController::class, 'store'])->name('admin_jobs_store');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\JobsController::class, 'edit'])->name('admin_jobs_edit');
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

    Route::prefix('application')->group(function () {


        Route::get('/', [\App\Http\Controllers\Admin\ApplicationController::class, 'index'])->name('admin_applications');
        Route::get('/create/{id}', [\App\Http\Controllers\Admin\ApplicationController::class, 'create'])->name('admin_application_add');
        Route::post('/store/{id}', [\App\Http\Controllers\Admin\ApplicationController::class, 'store'])->name('admin_application_store');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\ApplicationController::class, 'edit'])->name('admin_application_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\ApplicationController::class, 'update'])->name('admin_application_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\ApplicationController::class, 'destroy'])->name('admin_application_delete');
        Route::get('/show/{id}', [\App\Http\Controllers\Admin\ApplicationController::class, 'show'])->name('admin_application_show');

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
        Route::prefix('user')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::post('/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('/store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('/update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('/delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('/show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('/userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('/userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('/userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');

        });






    });//admin

}); #auth


Route::get('admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('logout', [HomeController::class, 'logout'])->name('logout');


Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');


});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('userprofile');
    Route::prefix('jobs')->group(function () {

        Route::get('/', [\App\Http\Controllers\JobsController::class, 'index'])->name('user_jobs');
        Route::get('/create', [\App\Http\Controllers\JobsController::class, 'create'])->name('user_jobs_add');
        Route::post('/store', [\App\Http\Controllers\JobsController::class, 'store'])->name('user_jobs_store');
        Route::get('/edit/{id}', [\App\Http\Controllers\JobsController::class, 'edit'])->name('user_jobs_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\JobsController::class, 'update'])->name('user_jobs_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\JobsController::class, 'destroy'])->name('user_jobs_delete');
        Route::get('/show', [\App\Http\Controllers\JobsController::class, 'show'])->name('user_jobs_show');

    });
    Route::prefix('image')->group(function () {

        Route::get('/create/{jobs_id}', [\App\Http\Controllers\ImageController::class, 'create'])->name('user_image_add');
        Route::post('/store/{jobs_id}', [\App\Http\Controllers\ImageController::class, 'store'])->name('user_image_store');
        Route::get('/delete/{id}/{jobs_id}', [\App\Http\Controllers\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('/show', [\App\Http\Controllers\ImageController::class, 'show'])->name('user_image_show');

    });

    Route::prefix('application')->group(function () {


        Route::get('/', [\App\Http\Controllers\ApplicationController::class, 'index'])->name('user_applications');
        Route::get('/create/{id}', [\App\Http\Controllers\ApplicationController::class, 'create'])->name('user_application_add');
        Route::post('/store/{id}', [\App\Http\Controllers\ApplicationController::class, 'store'])->name('user_application_store');
        Route::get('/edit/{id}', [\App\Http\Controllers\ApplicationController::class, 'edit'])->name('user_application_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\ApplicationController::class, 'update'])->name('user_application_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\ApplicationController::class, 'destroy'])->name('user_application_delete');
        Route::get('/show/{id}', [\App\Http\Controllers\ApplicationController::class, 'show'])->name('user_application_show');

    });

});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
