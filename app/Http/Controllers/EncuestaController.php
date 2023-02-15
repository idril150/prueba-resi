<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    public function index(){
        $encuestas = Encuesta::orderBy('id', 'desc')->paginate();


        return view('encuestas.index', compact('encuestas'));
    }

    public function create(){
        return view('encuestas.create');
    }

    public function store(Request $request ){
        $encuesta = new Encuesta();

        $encuesta->enc_name = $request->name;
        $encuesta->periodo = $request->descripcion;
        $encuesta->estado = $request->categoria;

        $encuesta-> save();

        return redirect()->route('encuestas.show', $encuesta);

    }

    public function show ($id){
        $encuesta = Encuesta::find($id);
        return view('encuestas.show', compact('encuesta'));
    }

    public function edit($id) {

    }
}
