@extends('app')
@section('content')
    <h1>Editar Cuenta de usuario</h1>
    <hr/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar cuenta de usuario</div>
                    <div class="panel-body">
                        @include('errors._errors')

                        {!! Form::model($usuario,['method' => 'PATCH', 'url' => 'usuarios/' . $usuario->id, 'class'=>'form-horizontal', 'role'=>'form']) !!}

                            @include('auth._form')

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-5">
                                    {!! Form::submit('Editar', ['class' => 'btn btn-primary form-control']) !!}
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection