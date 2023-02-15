<?php

use App\Http\Controllers\EncuestaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', HomeController::class);


Route::get('encuestas', [EncuestaController::class,'index'])->name('encuestas.index'); 

Route::get('encuestas/create', [EncuestaController::class,'create'])->name('encuestas.create'); 
Route::post('encuestas', [EncuestaController::class, 'store'])->name('encuestas.store');

Route::get('encuestas/{id}', [EncuestaController::class,'show'])->name('encuestas.show');

Route::get('ecuestas/{id/edit}', [EncuestaController::class, 'edit'])->name('encuestas.edit');