@extends('app')

@section('content')
    <h1>Agregar receta</h1>
    {!! Form::open(['url'=>'recetas'])!!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre:') !!}
            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descripcion', 'Descripción:') !!}
            {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('raciones', 'Raciones:') !!}
            {!! Form::text('raciones', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ruta_imagen', 'Imagen:') !!}
            {!! Form::text('ruta_imagen', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Agregar Receta', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@endsection