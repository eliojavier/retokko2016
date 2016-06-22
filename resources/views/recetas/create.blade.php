@extends('app')

@section('content')
    <h1>Agregar receta</h1>
    {!! Form::open(['url'=>'recetas', 'files'=>'true'])!!}
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
            {!! Form::label('Imagen:') !!}
            {!! Form::file('image', null) !!}
        </div>

        <p> Alergénicos:</p>

        <div class="form-group">
            {!! Form::label('Huevo:') !!}
            {!! Form::checkbox('huevo', 1) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Pescado:') !!}
            {!! Form::checkbox('pescado', 1) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Leche:') !!}
            {!! Form::checkbox('leche', 1) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Mani:') !!}
            {!! Form::checkbox('mani', 1) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Mariscos:') !!}
            {!! Form::checkbox('mariscos', 1) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Soya:') !!}
            {!! Form::checkbox('soya', 1) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Nueces:') !!}
            {!! Form::checkbox('nueces', 1) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Trigo:') !!}
            {!! Form::checkbox('trigo', 1) !!}
        </div>

        <p> Intolerancias:</p>
        <div class="form-group">
            {!! Form::label('Gluten:') !!}
            {!! Form::checkbox('gluten', 1) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Lactosa:') !!}
            {!! Form::checkbox('lactosa', 1) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Levadura:') !!}
            {!! Form::checkbox('levadura', 1) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Agregar Receta', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@endsection