<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


// welcome Page

Route::get('/', [WelcomeController::class, 'welcome'])->name('Welcome');
Route::get('/Contact-Us', [WelcomeController::class, 'contact'])->name('Contact');
Route::get('/About-Us', [WelcomeController::class, 'about'])->name('About');
Route::get('/Welcome/Plans', [WelcomeController::class, 'plans'])->name('Plans');
Route::post('/back', [WelcomeController::class, 'back'])->name('back');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/user.php';
require __DIR__ . '/admin.php';
