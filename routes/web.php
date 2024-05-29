<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrayerRequestController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contacts', function () {
    return view('contacts');
});
Route::get('ministries', function () {
    return view('ministries');
});
Route::get('events', function () {
    return view('events');
});
Route::get('prayerrequest', function () {
    return view('prayerrequest');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/submit_prayer_request', [PrayerRequestController::class, 'store'])->name('prayer.request.store');


