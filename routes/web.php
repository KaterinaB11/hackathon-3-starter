<?php

use App\Http\Controllers\AnimalController;
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

Route::get('/animals', [AnimalController::class, 'index']);

Route::get('/search', [AnimalController::class, 'search'])->name('search');
Route::get('/animal/{animal}', [AnimalController::class, 'show'])->name('animal.show');
Route::get('/owner/{owner}', [OwnerController::class, 'show'])->name('owner.show');
