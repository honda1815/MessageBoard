<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\MBcontroller;
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

Route::get('/MessageBoard/add', [MBcontroller::class, 'add']);

Route::post('/MessageBoard/confirm', [MBcontroller::class, 'confirm']);

Route::get('/MessageBoard/index', [MBcontroller::class, 'index']);

// Route::get('/MessageBoard/complete', [MBcontroller::class, 'complete']);
Route::get('/MessageBoard/complete', function () {
    return view('MessageBoard.complete');
});

Route::get('/MessageBoard/delete/{id}', [MBcontroller::class, 'delete']);
