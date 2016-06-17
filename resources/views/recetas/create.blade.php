@extends('app')

@section('content')
    <h1>Agregar receta</h1>

    {!! Form::open(['action'=>'RecetasController@store']) !!}
        @include('recetas.form', ['submitButtonText' => 'Agregar Receta'])
    {!! Form::close() !!}
@endsection