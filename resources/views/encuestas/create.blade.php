@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
    <h1>en esta pagina se puede crear un formulario</h1>
    <form action="{{route('encuestas.store')}}" method="POST">

        @csrf


        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br>
        <label>
            Periodo
            <br>
            <textarea name="descripcion"rows="5"></textarea>
        </label>

        <br>
        <label>
            Estado
            <br>
            <input type="text" name="categoria">
        </label>

        <br>
        <button type="submit">Enviar Encuesta</button>
    </form>
@endsection
