@extends('layouts.plantilla')

@section('title','Alumnos')

@section('content')
    <h1> Bienvenido a la página principal de Alumnos</h1>
    <h3> Lista de alumnos:</h3>
    <ul>
        @foreach ($alumnos as $alumno)
            <li> {{$alumno->nombres}} {{$alumno->apellidos}} </li>
        @endforeach
    </ul>

    <a href="{{route('alumnos.create')}}"> Agregar nuevo alumno </a>

@endsection