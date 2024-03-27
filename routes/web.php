<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/data', [App\Http\Controllers\InventoryController::class, 'index'])->name('data');
Route::get('/data/create', [App\Http\Controllers\InventoryController::class, 'create'])->name('create');
Route::post('/data/create', [App\Http\Controllers\InventoryController::class, 'store']);
Route::get('data/{id}/edit', [App\Http\Controllers\InventoryController::class, 'edit'])->name('barang.edit');
Route::put('data/{id}', [App\Http\Controllers\InventoryController::class, 'update'])->name('update');
Route::delete('data/{id}', [App\Http\Controllers\InventoryController::class, 'destroy'])->name('delete');



