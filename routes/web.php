<?php

use App\Http\Controllers\BookController;
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



Route::get('/',[BookController::class, 'home']);

Route::get('/tabel',[BookController::class,'index']);

Route::get('/cari/{id}',[BookController::class,'cari']);
