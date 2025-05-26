<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/audio', function () {
    return view('audio'); // Make sure the 'audio.blade.php' exists
})->name('audio');

Route::get('/video', function () {
    return view('video'); // Make sure the 'audio.blade.php' exists
})->name('video');

Route::get('/video', function () {
    return view('video'); // Make sure the 'audio.blade.php' exists
})->name('video');

Route::get('/artist', function () {
    return view('artist'); // Make sure the 'audio.blade.php' exists
})->name('artist');

Route::get('/contact', function () {
    return view('contact'); // Make sure the 'audio.blade.php' exists
})->name('contact');

Route::post('/appointments/send', [AppointmentController::class, 'send'])->name('appointments.send');
