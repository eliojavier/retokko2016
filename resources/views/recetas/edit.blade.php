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
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

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