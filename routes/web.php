<?php

use App\Http\Controllers\NumerosController;
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

Route::get('/', fn () => view('index'));
Route::get('/example-1', [NumerosController::class, 'example1'])->name('example.1');
Route::get('/example-2', [NumerosController::class, 'example2'])->name('example.2');

Route::get('/example-devextreme', function () {
    return view('example-devextreme');
});

Route::get('/numero', [NumerosController::class, 'index'])->name('index');
Route::get('/numero/list', [NumerosController::class, 'list'])->name('list');
Route::post('/numero/store', [NumerosController::class, 'store'])->name('store');
