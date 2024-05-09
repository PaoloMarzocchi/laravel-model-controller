<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('guests.home');
Route::get('/movies', [PageController::class, 'movies'])->name('guests.movies.index');
