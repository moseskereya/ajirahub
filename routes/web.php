<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contacts', [HomeController::class, 'contact'])->name('contact');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/jobs', [JobsController::class, 'index'])->name('index');
Route::get('/blogs', [BlogsController::class, 'index'])->name('index');

//Auth routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'signin'])->name('signin');
Route::post('/register', [AuthController::class, 'users'])->name('users');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminsController::class, 'index'])->name('dashboard');
    Route::get('/create-job', [AdminsController::class, 'postjobform'])->name('dashboard');
    Route::post('/jobs', [AdminsController::class, 'store'])->name('dashboard');
    Route::post('/company', [CompanyController::class, 'store'])->name('dashboard');
    Route::get('/manage', [AdminsController::class, 'managejobs'])->name('dashboard');
    Route::get('/dashboard-resumes', [AdminsController::class, 'resumes'])->name('dashboard');
    Route::get('/applicants', [AdminsController::class, 'applicants'])->name('dashboard');
    Route::get('/company-profile', [AdminsController::class, 'company'])->name('dashboard');
});





