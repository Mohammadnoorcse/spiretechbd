<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');


