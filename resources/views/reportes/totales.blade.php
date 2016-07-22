@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center tituloReporte">
                Aficionado/Público general - modalidad Postre
            </div>
        </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">Reporte de usuarios registrados por categoría</div>
                        <div class="panel-body">
                            @foreach($t_afi_pub as $t )
                            Total Usuarios en categoría Aficionado/Público General: <strong>{{$t->t_afipub}}</strong>
                            @endforeach
                                <br><br>
                            @foreach($t_est_pro as $t )
                            Total Usuarios en categoría Estudiante/Profesional: <strong>{{$t->t_estpro}}</strong>
                            @endforeach
                                <br><br><div class="text-center">Total de usuarios por talla de filipina</div>
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <tr>
                                            <th> Total usuarios </th>
                                            <th> Talla </th>
                                        </tr>
                                        @foreach($t_usu_fil as $t)
                                        <tr>
                                            <td>{{$t->usuarios}}</td>
                                            <td>{{$t->talla}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection

