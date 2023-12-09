<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
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


Route::view('/','index');
Route::view('/about','about');
Route::view('/elearning','elearning')->name('elearning');
Route::view('/bootcamp','bootcamp')->name('bootcamp');
Route::view('/quiz','quiz')->name('quiz');


Route::post('/ror', [QuestionController::class, 'store']
)->name('question.store');

// Inside E-Learning
Route::get('/elearning/web-development', function () {
    return view('inside-elearning/web_dev');
})->middleware(['auth', 'verified']);

Route::get('/elearning/artificial-intelligence', function () {
    return view('inside-elearning/ai');
})->middleware(['auth', 'verified']);

Route::get('/elearning/uiux', function () {
    return view('inside-elearning/uiux');
})->middleware(['auth', 'verified']);

Route::get('/elearning/graphic-design', function () {
    return view('inside-elearning/design_graphic');
})->middleware(['auth', 'verified']);

Route::get('/elearning/mobile-app-developer', function () {
    return view('inside-elearning/mobile_app_dev');
})->middleware(['auth', 'verified']);

Route::get('/elearning/digital-marketing', function () {
    return view('inside-elearning/digital_marketing');
})->middleware(['auth', 'verified']);
// End Inside E-Learning

// Inside Inside E-Learning
Route::get('/elearning/web-development/material', function () {
    return view('inside-elearning/inside-web-dev');
})->middleware(['auth', 'verified']);
// End Inside Inside E-Learning

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
