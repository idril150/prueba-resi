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

Route::controller(EncuestaController::class)->group(function(){
    Route::get('encuestas', 'index')->name('encuestas.home'); 
    Route::get('encuestas/create', 'create');
    Route::get('encuestas/{encuesta}', 'show');
});
