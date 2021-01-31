<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DonorController;

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
Route::get('/',[HomeController:: class, 'index'])->name('home');
Route::get('/about',[HomeController:: class, 'about'])->name('about');
Route::get('/contact',[HomeController:: class, 'contact'])->name('contact');
Route::post('/contact/store',[ContactController:: class, 'store'])->name('contact.store');
Route::get('/admin',[HomeController:: class, 'admin'])->name('admin');
Route::get('/service',[ServiceController:: class, 'index'])->name('service');
Route::get('/service/search',[ServiceController:: class, 'search'])->name('service.search');
Route::get('/service/req',[ServiceController:: class, 'req'])->name('service.req');
Route::get('/service/donate',[ServiceController:: class, 'donate'])->name('service.donate');
Route::post('/service/donate/submit',[DonorController::class, 'store'])->name('don-reg');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
