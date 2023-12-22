<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginRegisterController;
use App\Http\Controllers\BlogController;

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

//public routes
Route::get('/',[HomeController::class, 'index'])->name('/');
Route::get('shop',[HomeController::class, 'shop']);
Route::get('whyUs',[HomeController::class, 'whyUs']);
Route::get('testimonial',[HomeController::class, 'testimonial']);
Route::get('contactUs',[HomeController::class, 'contactUs']);

//authentication routes
Route::get('login',[LoginRegisterController::class,'login']);
Route::get('register',[LoginRegisterController::class,'register']);
Route::post('store',[LoginRegisterController::class,'store'])->name('store');
Route::post('authenticate',[LoginRegisterController::class,'authenticate'])->name('authenticate');
Route::middleware(['user_type:admin,customer'])->group(function(){
    Route::get('dashboard',[LoginRegisterController::class,'dashboard'])->name('dashboard');
    Route::get('blog',[BlogController::class,'index'])->name('blog');
    Route::get('blog/create',[BlogController::class,'create'])->name('blog.create');
   
});

Route::get('get-countries',[LoginRegisterController::class,'getCountries'])->name('getCountries');
Route::post('logout',[LoginRegisterController::class,'logout'])->name('logout');
