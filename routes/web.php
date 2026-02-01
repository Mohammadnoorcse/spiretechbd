<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/project', [FrontendController::class, 'project'])->name('project');
Route::get('/web', [FrontendController::class, 'web'])->name('web');
Route::get('/marketing', [FrontendController::class, 'marketing'])->name('marketing');
Route::get('/softerware', [FrontendController::class, 'softerware'])->name('softerware');
Route::get('/mobile', [FrontendController::class, 'mobile'])->name('mobile');
Route::get('/e-commerce-solution', [FrontendController::class, 'ecommercesolution'])->name('ecommercesolution');
Route::get('/food-delivery-app', [FrontendController::class, 'fooddelivery'])->name('fooddelivery');
Route::get('/pos-software', [FrontendController::class, 'possoftware'])->name('possoftware');


