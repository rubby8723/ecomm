<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;

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
// Route::get('eventlisteners', [UsersController::class, 'index'])->name('implementEventListeners');
// Route::get('/home', function () {

//     return view('users');
// });
// Route::view('user','users')->middleware('test');

// Route::get('testinguser', [StudentController::class, 'index']);
// Route::post('forms', [StudentController::class, 'submit_form'])->name('forms');
// Route::get('fetch', [StudentController::class, 'fetch'])->name('fetch');
// Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
// Route::get('tests', [StudentController::class, 'helpertest'])->name('test');
Route::get('/',[HomeController::class, 'index']);
Route::get('shop',[HomeController::class, 'shop']);
Route::get('whyUs',[HomeController::class, 'whyUs']);
Route::get('testimonial',[HomeController::class, 'testimonial']);
Route::get('contactUs',[HomeController::class, 'contactUs']);
Route::get('login',[LoginController::class,'login']);
Route::get('registeration',[LoginController::class,'registeration']);
Route::post('store',[LoginController::class,'store'])->name('store');
