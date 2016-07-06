@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">Editar cuenta de usuario</div>
                    <div class="panel-body">
                        @include('errors._errors')

                        {!! Form::model($usuario,['method' => 'PATCH', 'url' => 'usuarios/' . $usuario->id, 'class'=>'form-horizontal', 'role'=>'form']) !!}

                            @include('auth._form')

                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-5">
                                    </br>
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