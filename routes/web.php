<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\BikeListingController;
use App\Http\Controllers\Frontend\HondaController;
use App\Http\Controllers\Frontend\SuzukiController;
use App\Http\Controllers\Frontend\YamahaController;
use App\Http\Controllers\Backend\Authentication\RegisterController;
use App\Http\Controllers\Backend\Authentication\LoginController;
use App\Http\Controllers\Backend\Authentication\LogOutController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/frontend/index',   [indexController::class, 'index'])->name('frontend.index');
Route::get('/frontend/about',   [AboutController::class, 'index'])->name('frontend.about');
Route::get('/frontend/contact', [ContactController::class, 'index'])->name('frontend.contact');
Route::get('/frontend/service', [ServiceController::class, 'index'])->name('frontend.service');
Route::get('/frontend/bikelisting', [BikeListingController::class, 'index'])->name('frontend.bikelisting');
Route::get('/frontend/honda', [HondaController::class, 'index'])->name('frontend.honda');
Route::get('/frontend/suzuki', [SuzukiController::class, 'index'])->name('frontend.suzuki');
Route::get('/frontend/yamaha', [YamahaController::class, 'index'])->name('frontend.yamaha');


// backend
Route::post('backend/authentication/register', [RegisterController::class, 'register'])->name('backend.authentication.register');

Route::post('backend/authentication/login', [LoginController::class, 'login'])->name('backend.authentication.login');
Route::get('backend/authentication/logout', [LogOutController::class, 'logout'])->name('backend.authentication.logout');