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
});

// Movie CRUD
// Route::get('/movies/create'
Route::get('/animals/create', [AnimalCRUDController::class, 'create'])->name('animals.create');
// Route::post('/movies', [AnimalCRUDController::class, 'store'])->name('movies.store');

// Route::get('/movies/{movie}/edit', [AnimalCRUDController::class, 'edit'])->whereNumber('movie')->name('movies.edit');
// Route::put('/movies/{movie}', [AnimalCRUDController::class, 'update'])->whereNumber('movie')->name('movies.update');
// Route::delete('/movies/{movie}', [AnimalCRUDController::class, 'destroy'])->whereNumber('movie')->name('movies.destroy');