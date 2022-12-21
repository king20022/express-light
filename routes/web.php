<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserdetailController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/track', [HomeController::class, 'track'])->name('track');

Route::post('/submit', [UserdetailController::class, 'submit'])->name('submit');
Route::get('/tracking_id/{tracking_id}', [UserdetailController::class, 'tracking_id'])->name('tracking_id');

Route::post('/tracking_id', [UserdetailController::class, 'check'])->name('check');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [UserdetailController::class, 'dashboard'])->name('dashboard');
    Route::get('/update-location/{detail}', [UserdetailController::class, 'edit'])->name('edit');
    Route::post('/update-location/{detail}', [UserdetailController::class, 'update'])->name('update');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
