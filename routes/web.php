<?php

use App\Http\Controllers\EncuestaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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



Route::get('/', HomeController::class);


Route::get('encuestas', [EncuestaController::class,'index'])->name('encuestas.index'); 
Route::get('encuestas/create', [EncuestaController::class,'create'])->name('encuestas.create'); 
Route::get('encuestas/{id}', [EncuestaController::class,'show'])->name('encuestas.show');

