@extends('app')
@section('content')
    <script>
        $(document).ready(function() {
            var ingredientes = [];
            $('#agregar').click(function() {
                if(document.getElementById('ing').value != "") {
                    ingredientes.push(document.getElementById('ing').value);
                    $("#ingredientes").val("");
                    for (var i = 0; i < ingredientes.length; ++i) {
                        $("#ingredientes").val($("#ingredientes").val()
                                + '--'
                                + ingredientes[i]
                                + '\n');
                    }
                    document.getElementById('ing').value = "";
                }
            });
            $("#eliminar").click(function () {
                ingredientes.pop();
                $("#ingredientes").val("");
                for (var i = 0; i < ingredientes.length; ++i) {
                    $("#ingredientes").val($("#ingredientes").val()
                            + '--'
                            + ingredientes[i]
                            + '\n');
                }
            });
        });
    </script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">Editar Receta</div>
                    <div class="panel-body">

                        @include('errors._errors')


                        {!! Form::model($receta,['method' => 'PATCH', 'url' => 'recetas/' . $receta->id, 'class'=>'form-horizontal', 'role'=>'form']) !!}

                        @include('recetas._form')

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
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