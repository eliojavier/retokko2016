@extends('app')
@section('content')
    <h1>Editar Receta</h1>
    <hr/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        @include('errors._errors')

                        {!! Form::model($receta,['method' => 'PATCH', 'url' => 'recetas/' . $receta->id, 'class'=>'form-horizontal', 'role'=>'form']) !!}
                            @include('recetas.form')
                            <div class="form-group">
                                {!! Form::submit('Editar Receta', ['class' => 'btn btn-primary form-control']) !!}
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection