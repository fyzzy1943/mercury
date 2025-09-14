<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DallyController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('dally', function() {
    return Inertia::render('Dally');
});


Route::get('dally/new', [DallyController::class, 'create'])->name('dally.create');
// Route::group

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
