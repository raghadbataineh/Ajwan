<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryControllerAD;
use App\Http\Controllers\CourseControllerAD;
use App\Http\Controllers\MessagesControllerAD;



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

// Route::get('/a', function () {
//     return view('course');
// });
Route::get('/course', [CourseController::class, 'course'])->name('course');
Route::get('/course/{category_id}', [CourseController::class, 'filterByCategory'])->name('course');

Route::get('/', function () {
    return view('index');
});

Route::get('/', [CategoryController::class, 'indexcategory'])->name('category.indexcategory');

Route::get('/coursedetails', function () {
    return view('detail');
});

Route::get('details/{id}', [CourseController::class, 'CourseDetails'])->name('coursedetails');
Route::get('/about', function () {
    return view('about
    ');
})->name('about');


// contact us page routes
Route::get('/contact-us', [MailController::class, 'showContact'])->name('show.contact');
Route::post('/contact-us', [MailController::class, 'sendContact'])->name('contact.us.store');

//Admin Dashboard

Route::get('/admin_login', [AdminAuth::class, 'login']);

Route::post('admin_login', [AdminAuth::class, 'loginAdmin'])->name('admin_login2');
Route::get('admin_dashboard/home', [AdminAuth::class, 'adminHome'])->middleware('adminMiddleWare');
Route::get('dashboard_logout', [AdminAuth::class, 'adminLogout']);

Route::middleware(['adminMiddleWare'])->group(function () {
    Route::resource('admin_dashboard/categories', CategoryControllerAD::class);
    Route::resource('admin_dashboard/courses', CourseControllerAD::class);
    Route::resource('admin_dashboard/messages', MessagesControllerAD::class);
    Route::resource('admin_dashboard/admins', AdminController::class);

});