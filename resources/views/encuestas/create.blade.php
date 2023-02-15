@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
    <h1>en esta pagina se puede crear un formulario</h1>
    <form action="{{route('encuestas.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name">
        </label>
        <br>
        <label>
            periodo:
            <textarea name="periodo" rows="5"></textarea>
        </label>
        <br>
        <label>
            estado:
            <input type="text" name="estado">
        </label>
        <br>
        <button type="submit">enviar formulario</button>
    </form>
@endsection
