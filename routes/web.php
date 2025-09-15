<?php

use App\Http\Controllers\DallyController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('dally', [DallyController::class, 'index']);

-Route::get('dally/new', [DallyController::class, 'create'])->name('dally.create');
-// Route::group
    
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
