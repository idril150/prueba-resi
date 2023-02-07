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
use app\Http\Controllers\HomeController;

Route::get('/', HomeController::class);

Route::get('encuestas', function(){
    return "holi";
});

Route::get('encuestas/create', function () {
    return "en esta pagina se puede crear un formulario";
});

Route::get('encuestas/{encuesta}', function($encuesta){
    return "bienvenido a la encuesta: $encuesta ";

});
