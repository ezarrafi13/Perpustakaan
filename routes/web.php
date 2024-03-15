<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublisherController;
use App\Models\Author;
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
});

Route::resource('post', AuthorController::class);
Route::resource('postt', PublisherController::class);
Route::resource('posttt', BookController::class);

Route::get('/dashboard', [AuthorController::class, 'index'])
->middleware(['auth', 'verified'])
->name('dashboard');

Route::get('/publisher', [PublisherController::class, 'index'])
->middleware(['auth', 'verified'])
->name('publisher');

Route::get('/book', [BookController::class, 'index'])
->middleware(['auth', 'verified'])
->name('book');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
