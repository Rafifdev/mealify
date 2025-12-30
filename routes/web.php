<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/ingredients', function () {
    return view('pages.ingredients');
})->middleware(['auth', 'verified'])->name('ingredients');

Route::get('/meal-planner', function () {
    return view('pages.meal-planner');
})->middleware(['auth', 'verified'])->name('meal-planner');

Route::get('/budget', function () {
    return view('pages.budget');
})->middleware(['auth', 'verified'])->name('budget');

Route::get('/recipes', function () {
    return view('pages.recipes');
})->middleware(['auth', 'verified'])->name('recipes');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
