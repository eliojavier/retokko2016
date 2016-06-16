@extends('app')

@section('content')
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
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
        </div>

@endsection