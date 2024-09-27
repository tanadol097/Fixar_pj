<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PageController;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/home_em', [PageController::class, 'home_em'])->name('home_em');
Route::get('/ourservices', [PageController::class, 'ourservices'])->name('ourservices');



Route::get('/register_em', [PageController::class, 'register_em'])->name('register_em');
Route::get('/register_user', [PageController::class, 'register_user'])->name('register_user');



Route::get('/booking_em1', [PageController::class, 'booking_em1'])->name('booking_em1');
Route::get('/booking_em2', [PageController::class, 'booking_em2'])->name('booking_em2');
Route::get('/booking_em3', [PageController::class, 'booking_em3'])->name('booking_em3');
Route::get('/booking_em4', [PageController::class, 'booking_em4'])->name('booking_em4');
Route::get('/booking_em5', [PageController::class, 'booking_em5'])->name('booking_em5');
Route::get('/booking_success', [PageController::class, 'booking_success'])->name('booking_success');


Route::get('/profile_em1', [PageController::class, 'profile_em1'])->name('profile_em1');
Route::get('/profile_em2', [PageController::class, 'profile_em2'])->name('profile_em2');
Route::get('/profile_em3', [PageController::class, 'profile_em3'])->name('profile_em3');
Route::get('/profile_em4', [PageController::class, 'profile_em4'])->name('profile_em4');
Route::get('/profile_em5', [PageController::class, 'profile_em5'])->name('profile_em5');