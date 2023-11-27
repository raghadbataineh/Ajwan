<?php

use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MailController;


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
Route::get('/', function () {
    return view('index');
});

Route::get('/', [CategoryController::class, 'indexcategory'])->name('category.indexcategory');
Route::get('/shop/{id}', [CategoryController::class, 'shop'])->name('shop.index');
Route::get('/coursedetails', function () {
    return view('detail');
});

// Route::get('details/{id}', [CourseController::class, 'CourseDetails'])->name('coursedetails');
Route::get('/about', function () {
    return view('about
    ');
})->name('about');


// contact us page routes
Route::get('/contact-us', [MailController::class, 'showContact'])->name('show.contact');
Route::post('/contact-us', [MailController::class, 'sendContact'])->name('contact.us.store');

