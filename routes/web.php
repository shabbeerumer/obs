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
use App\Http\Controllers\Backend\Others\HondaForm\HondaFormController;
use App\Http\Controllers\Frontend\HondaDetailController;
use App\Http\Controllers\Backend\Others\AddToCart\CartController;
use App\Http\Controllers\Backend\Others\Checkout\CheckOutController;
use App\Http\Controllers\Frontend\ChatbotController;

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
Route::get('/frontend/addtocart', [CartController::class, 'index'])->name('frontend.addtocart');

// Chatbot API - Only keeping the API endpoint, removing the page routes
Route::post('/api/chatbot', [ChatbotController::class, 'generateResponse']);

// backend
Route::post('backend/authentication/register', [RegisterController::class, 'register'])->name('backend.authentication.register');
Route::post('backend/authentication/login', [LoginController::class, 'login'])->name('backend.authentication.login');
Route::get('backend/authentication/logout', [LogOutController::class, 'logout'])->name('backend.authentication.logout');

Route::get('backend/hondaform', [HondaFormController::class, 'index'])->name('hondaform');
Route::post('backend/hondaform/store', [HondaFormController::class, 'store'])->name('hondaform.store');
Route::get('/backend/hondadetail/{id}', [HondaDetailController::class, 'index'])->name('backend.hondadetail');
Route::post('/backend/addtocart/store', [CartController::class, 'store'])->name('backend.addtocart.store');
Route::get('/backend/addtocart/{id}', [CartController::class, 'remove'])->name('backend.addtocart.remove');
Route::post('/backend/checkout', [CheckOutController::class, 'store'])->name('backend.checkout');
