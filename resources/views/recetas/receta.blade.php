@extends('app')
@section('content')
    <h1>Receta</h1>
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

                            <div class="form-group">
                                {!! Form::label('nombre', 'Nombre:', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::label('nombre', $receta->nombre, ['class' => 'control-label']) !!}
                                </div>
                            </div>


                            <div class="ui-widget form-group">
                                <label for="tags" class="col-md-4 control-label">Ingrediente: </label>
                                <div class="col-md-6">
                                    <input id="tags">
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('receta', 'Receta:', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::textarea('receta', $receta->receta, ['class' => 'control-label']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('raciones', 'Raciones:', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('raciones', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('modalidad', 'Modalidad:', ['class' => 'col-md-4 control-label']) !!}
                                {!! Form::radio('recipe','Postre') !!} <span style="padding-right: 25px">Postre</span>
                                {!! Form::radio('recipe','Salado') !!} <span style="padding-right: 25px">Salado</span>
                            </div>

                            <div class="form-group">
                                {!! Form::label('imagen', 'Imagen:', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::file('image', null, ['class' => 'form-control']) !!}
                                </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection