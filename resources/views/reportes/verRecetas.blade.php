@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Aficionado/Público General Postre</div>
                <div class="panel-body">
                    @foreach($afi_pub_postre as $user )
                        <div class="col-xs-12">
                            <table>
                                <tbody>
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

