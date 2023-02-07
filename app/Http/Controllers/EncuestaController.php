<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    public function index(){
        return "inicio";
    }

    public function create(){
        return "en esta pagina se puede crear un formulario";
    }

    public function show ($encuesta){
        return "bienvenido a la encuesta: $encuesta ";
    }
}
