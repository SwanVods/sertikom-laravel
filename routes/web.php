<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;

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

Route::get('/', [NameController::class, 'index'])->name('home');
Route::post('/add', [NameController::class, 'store'])->name('store');
Route::get('/edit/{id}', [NameController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [NameController::class, 'update'])->name('update');
Route::get('/delete/{id}', [NameController::class, 'delete'])->name('delete');
