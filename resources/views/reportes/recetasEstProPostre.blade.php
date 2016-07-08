@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">Estudiante/Profesional - modalidad postre</div>
                    <div class="panel-body">
                        @foreach($est_pro_postre as $user )

                                <div class="table-responsive">
                                <table class="table table-hover">
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
                                        <td><p><strong>Cedula:</strong> {{$user->cedula}}</p></td>
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
                                            <p><strong>Dirección:</strong> {{$user->direccion}}</p>
                                        </td>
                                        <td>
                                            <p><strong>Modalidad y Categoría:</strong>
                                            <ul>
                                                <li>{{$user->modalidad}}</li>
                                                <li>{{$user->categoria}}</li>
                                            </ul>
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
                                            <p><strong>Categroría: </strong> {{$user->categoria}}</p>
                                        </td>
                                        <td>
                                            <p><strong>Academia: </strong> {{$user->academia}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>Nombre receta: </strong> {{$user->receta}}</p>
                                        </td>
                                        <td>
                                            <p><strong>Modalidad: </strong> {{$user->modalidad}}</p>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <p><strong>Preparación: </strong> {{$user->preparacion}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>Raciones: </strong> {{$user->raciones}}</p>
                                        </td>
                                        <td>
                                            @if($user->imagen)
                                                <img class="img-responsive"  src="{{ asset('/img/recetas/'.$user->imagen)}}" alt=""/>
                                            @endif

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

