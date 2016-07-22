@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                <div class="panel-heading text-center">Reportes</div>
                <div class="panel-body">
                    <ul class="reportes">
                        <li><a href="../reportes/recetasAfiPubPostre">Aficionado/Público general en modalidad postre</a></li>
                        <li><a href="../reportes/recetasAfiPubSalado">Aficionado/Público general en modalidad salado</a></li>
                        <li><a href="../reportes/recetasEstProPostre">Estudiante/Profesional en modalidad postre</a></li>
                        <li><a href="../reportes/recetasEstProSalado">Estudiante/Profesional en modalidad salado</a></li>
                        <li><a href="../reportes/totales">Totales</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection