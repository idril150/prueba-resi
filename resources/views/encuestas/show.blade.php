@extends('layouts.plantilla')

@section('title', 'Encuesta ' . $encuesta->enc_name)

@section('content')
    <h1>bienvenido a la encuesta: {{$encuesta->enc_name}}</h1>
    <a href="{{route('encuestas.index')}}"><-- volver a las encuestas</a>
    
    <p><strong>periodo: </strong>{{$encuesta->periodo}}</p>
    <p><strong>estado: </strong>{{$encuesta->estado}}</p>
    <br>
    <a href="{{route('encuestas.edit',$encuesta)}}">Editar encuesta</a>

@endsection

