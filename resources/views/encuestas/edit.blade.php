@extends('layouts.plantilla')

@section('title', 'edit')

@section('content')
    <h1>en esta pagina se puede editar un formulario</h1>
    <form action="{{route('encuestas.update', $encuesta)}}" method="post">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{$encuesta->enc_name}}">
        </label>
        <br>
        <label>
            periodo:
            <textarea name="periodo" rows="5">{{$encuesta->periodo}}</textarea>
        </label>
        <br>
        <label>
            estado:
            <input type="text" name="estado" value="{{$encuesta->estado}}">
        </label>
        <br>
        <button type="submit">actualizar formulario</button>
    </form>
@endsection
