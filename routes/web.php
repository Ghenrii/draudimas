<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
./vendor/bin/sail up
*/

Route::get('/', [OwnersController::class, 'index'])->name('owners.index');
Route::get('/create', [OwnersController::class, 'create'])->name('owners.create');
Route::post('/', [OwnersController::class, 'add'])->name('owners.add');
Route::get('/{owner}/edit', [OwnersController::class, 'edit'])->name('owners.edit');
Route::put('/{owner}/update', [OwnersController::class, 'update'])->name('owners.update');
Route::delete('/{owner}/delete', [OwnersController::class, 'delete'])->name('owners.delete');