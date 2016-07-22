@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center tituloReporte">
                Aficionado/Público general - modalidad Postre
            </div>
        </div>
        @foreach($afi_pub_postre as $user )
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">{{$user->nombre." ".$user->apellido}}</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th style="width: 50%"></th>
                                        <th style="width: 50%"></th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>Nombre Completo:</strong> {{$user->nombre." ".$user->apellido}}</p>
                                        </td>
                                        <td>
                                            <p><strong>Email:</strong> {{$user->email}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p><strong>Cédula:</strong> {{$user->cedula}}</p></td>
                                        <td>
                                            <p><strong>Fecha de Nacimiento:</strong> {{$user->fecha_nacimiento}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p><strong>Teléfono:</strong> {{$user->telefono}}</p></td>
                                        <td>
                                            <p><strong>Talla de Filipina:</strong> {{$user->talla}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>Estado:</strong> {{$user->estado}}</p>
                                        </td>
                                        <td>
                                            <p><strong>Dirección:</strong> {{$user->direccion}}</p>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td>
                                            <p><strong>Twitter: </strong> {{$user->twitter}}</p>
                                        </td>
                                        <td>
                                            <p><strong>Instagram: </strong> {{$user->instagram}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>Nombre receta: </strong> {{$user->nombreReceta}}</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>Ingredientes: </strong> {{$user->ingredientes}}</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>Preparación: </strong> {{$user->preparacion}}</p>
                                        </td>
                                    </tr>

                                    @if($user->imagen)
                                        <tr>
                                            <td>
                                                <img class="autoResizeImage img-rounded"  src="{{ asset('/img/recetas/'.$user->imagen)}}" alt=""/>
                                            </td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td>
                                            <p><strong>Raciones: </strong> {{$user->raciones}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Alergénicos:
                                            <br>
                                            <ul>
                                                @if($user->huevo)
                                                    <li>{{ "Huevos" }}</li>
                                                @endif
                                                @if($user->pescado)
                                                    <li>{{ "Pescado" }}</li>
                                                @endif
                                                @if($user->leche)
                                                    <li>{{ "Leche" }}</li>
                                                @endif
                                                @if($user->mani)
                                                    <li>{{ "Mani" }}</li>
                                                @endif
                                                @if($user->mariscos)
                                                    <li>{{ "Mariscos" }}</li>
                                                @endif
                                                @if($user->mariscos)
                                                    <li>{{ "Soya" }}</li>
                                                @endif
                                                @if($user->nueces)
                                                    <li>{{ "Nueces" }}</li>
                                                @endif
                                                @if($user->trigo)
                                                    <li>{{ "Trigo" }}</li>
                                                @endif
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Intorelancias:
                                            <br>
                                            <ul>
                                                @if($user->gluten)
                                                    <li>{{ "Gluten" }}</li>
                                                @endif
                                                @if($user->lactosa)
                                                    <li>{{ "Lactosa" }}</li>
                                                @endif
                                                @if($user->levadura)
                                                    <li>{{ "Levadura" }}</li>
                                                @endif
                                            </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection

