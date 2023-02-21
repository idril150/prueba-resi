@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
    <h1>en esta pagina se puede crear un formulario</h1>
    <form action="{{route('encuestas.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            periodo:
            <textarea name="periodo" rows="5" >{{old('periodo')}}</textarea>
        </label>
        @error('periodo')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            estado:
            <input type="text" name="estado" value="{{old('estado')}}">
        </label>
        @error('estado')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">enviar formulario</button>
    </form>
@endsection
