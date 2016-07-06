@extends('app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">Editar Receta</div>
                <div class="panel-body">

                    @include('errors._errors');


                    {!! Form::model($receta,['method' => 'PATCH', 'url' => 'recetas/' . $receta->id, 'class'=>'form-horizontal', 'role'=>'form']) !!}

                        @include('recetas._form')

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-5">
                            </br>
                                {!! Form::submit('Editar Receta', ['class' => 'btn btn-primary form-control']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection