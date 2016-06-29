@extends('app')
@section('content')
    <h1>Receta</h1>
    <hr/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/recetas/{{$receta->id}}/edit"> Editar receta <a/></div>
                    <div class="panel-body">
                        {!! Form::label($receta->nombre) !!}
                        <br/>
                        {!! Form::label($receta->receta) !!}
                        <br/>
                        {!! Form::label($receta->raciones) !!}
                        <br/>
                        <img src={{asset('/img/recetas/'.$receta->imagen)}} class="img-responsive" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection