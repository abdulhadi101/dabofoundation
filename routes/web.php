<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/become-a-volunteer', [\App\Http\Controllers\VolunteerController::class, 'index'])->name('volunteer');
Route::post('/volunteer', [\App\Http\Controllers\VolunteerController::class, 'store'])->name('volunteer.create');
Route::get('/events', [\App\Http\Controllers\EventController::class, 'index'])->name('event.index');
Route::get('/events/{event:slug}', [\App\Http\Controllers\EventController::class, 'show'])->name('event.show');


Route::get('/what-we-do', function () {
    return view('what-we-do');
})->name('what-we-do');

Route::get('/media', function () {
    return view('media');
})->name('media');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
