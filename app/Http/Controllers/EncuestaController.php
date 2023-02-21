<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;

use App\Http\Requests\StoreEncuesta;

class EncuestaController extends Controller
{
    public function index(){
        $encuestas = Encuesta::orderBy('id','desc')->paginate();


        return view('encuestas.index', compact('encuestas'));
    }

    public function create(){
        return view('encuestas.create');
    }

    public function store(StoreEncuesta $request){

        $encuesta = new Encuesta();
        $encuesta->name = $request->name;
        $encuesta->periodo = $request->periodo;
        $encuesta->estado = $request->estado;

        $encuesta->save();

       /* return $request->all();

        $encuesta = Encuesta::create([$request->all()]);*/

        return redirect()->route('encuestas.show', $encuesta);
    }

    public function show (Encuesta $encuesta){
        return view('encuestas.show', compact('encuesta'));
    }

    public function edit(Encuesta $encuesta){
        
        return view('encuestas.edit', compact('encuesta'));
    }

    public function update(Request $request,Encuesta $encuesta){

        $request->validate([
            'name' => 'required',
            'periodo' => 'required',
            'estado' => 'required'
        ]);

        $encuesta->name = $request->name;
        $encuesta->periodo = $request->periodo;
        $encuesta->estado = $request->estado;

        $encuesta->save();
        return redirect()->route('encuestas.show', $encuesta);
    }
}
