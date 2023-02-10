<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    public function index(){
        $encuestas = Encuesta::paginate();


        return view('encuestas.index', compact('encuestas'));
    }

    public function create(){
        return view('encuestas.create');
    }

    public function show ($id){
        $encuesta = Encuesta::find($id);
        return view('encuestas.show', compact('encuesta'));
    }
}
