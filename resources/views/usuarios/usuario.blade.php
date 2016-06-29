@extends('app')
@section('content')
    <h1>Cuenta de usuario</h1>
    <hr/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> <a href="/usuarios/{{$usuario->id}}/edit"> Editar cuenta </a> <a/></div>
                    <div class="panel-body">
                        {!! Form::label($usuario->nombre) !!}
                        <br/>
                        {!! Form::label($usuario->apellido) !!}
                        <br/>
                        {!! Form::label($usuario->email) !!}
                        <br/>
                        {!! Form::label($usuario->cedula) !!}
                        <br/>
                        {!! Form::label($usuario->fecha_nacimiento) !!}
                        <br/>
                        {!! Form::label($usuario->telefono) !!}
                        <br/>
                        {!! Form::label($usuario->talla) !!}
                        <br/>
                        {!! Form::label($usuario->direccion) !!}
                        <br/>
                        {!! Form::label($usuario->twitter) !!}
                        <br/>
                        {!! Form::label($usuario->instagram) !!}
                        <br/>
                        {!! Form::label($usuario->academia) !!}
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection