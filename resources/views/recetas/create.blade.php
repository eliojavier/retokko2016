@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading text-center color-titulo">Agregar Receta</div>
                    <div class="panel-body">

                        @include('errors._errors')

                        {!! Form::open(['url'=>'recetas', 'files'=>'true', 'class'=>'form-horizontal', 'role'=>'form', 'name' => 'crearReceta'])!!}

                        @include('recetas._form')

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-5">
                                </br>
                                {!! Form::submit('Agregar', ['class' => 'btn btn-primary form-control']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection