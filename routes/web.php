<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('about-us', [AboutController::class, 'index'])->name('about');
Route::get('service', [ServiceController::class, 'index'])->name('service');
Route::get('contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('/', [IndexController::class, 'newsLetter'])->name('newsLetter.store');
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.store');
