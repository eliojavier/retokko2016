@extends('app')
@section('content')
    <h1>Editar Cuenta de usuario</h1>
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

                        {!! Form::model($usuario,['method' => 'PATCH', 'url' => 'usuarios/' . $usuario->id, 'class'=>'form-horizontal', 'role'=>'form']) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">

                            {!! Form::label('nombre', 'Nombre:', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nombre', old('nombre'), ['class' => 'form-control col-md-6']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('apellido', 'Apellido:', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('apellido', old('apellido'), ['class' => 'form-control col-md-6']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'E-Mail:', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('email', old('email'), ['class' => 'form-control col-md-6']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('cedula', 'Cédula:', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('cedula', null, ['class' => 'form-control col-md-6']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento:', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('fecha_nacimiento', null, ['class' => 'form-control col-md-6', 'id' => 'datepicker']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('telefono', 'Teléfono:', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('telefono', null, ['class' => 'form-control col-md-6']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('talla', 'Talla:', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('talla',
                                                    array
                                                        ('SS' => 'SS',
                                                        'S' => 'S',
                                                        'M' => 'M',
                                                        'L' => 'L',
                                                        'XL' => 'XL',
                                                        'XXL' => 'XXL',
                                                        'Otro' => 'Otro'),
                                                    null,
                                                    ['class' => 'form-control col-md-6'])
                                 !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('direccion', 'Dirección:', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('direccion', null, ['class' => 'form-control col-md-6']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('twitter', 'Twitter:', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('twitter', null, ['class' => 'form-control col-md-6']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('instagram', 'Instagram:', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('instagram', null, ['class' => 'form-control col-md-6']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('academia', 'Estudiante/Profesional (en curso o graduado)', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('academia',
                                                    array(
                                                     null => 'N/A',
                                                    'Otro' => 'Otro',
                                                    'La Academia del Café' => 'La Academia del Café',
                                                    'Academia de Sommeliers de Venezuela' => 'Academia de Sommeliers de Venezuela',
                                                    'IGA' => 'IGA',
                                                    'Academia ATF' => 'Academia ATF',
                                                    'Escuela Collectania' => 'Escuela Collectania',
                                                    'Grupo Académico Panadero Pastelero' => 'Grupo Académico Panadero Pastelero',
                                                    'Instituto Europeo del Pan' => 'Instituto Europeo del Pan',
                                                    'Centro Venezolano de Capacitación Gastronómica' => 'Centro Venezolano de Capacitación Gastronómica',
                                                    'Instituto Culinario de Caracas' => 'Instituto Culinario de Caracas',
                                                    'Galería Gastronómica. GAGA' => 'Galería Gastronómica. GAGA',
                                                    'Instituto Mandalay Centro de Estudios Gastronómicos' => 'Instituto Mandalay Centro de Estudios Gastronómicos',
                                                    'Academia de Artes Culinarias de Caracas' => 'Academia de Artes Culinarias de Caracas',
                                                    'Academia Profesional Gourmet 2003' => 'Academia Profesional Gourmet 2003',
                                                    'Centro Educativo de Gastronomía y Pastelería Nuestro Pan de Cada Día' => 'Centro Educativo de Gastronomía y Pastelería Nuestro Pan de Cada Día',
                                                    'Centro de Capacitación Profesional de Alta Cocina' => 'Centro de Capacitación Profesional de Alta Cocina',
                                                    'Centro de Estudios Gastronómicos' => 'Centro de Estudios Gastronómicos',
                                                    'Zi Teresa Centro de Arte Culinario' => 'Zi Teresa Centro de Arte Culinario',
                                                    'Escuela Venezolana del Café' => 'Escuela Venezolana del Café',
                                                    'La Casserole Du Chef' => 'La Casserole Du Chef',
                                                    'High Training Educational Institute. Instituto Superior de Artes Culinarias' => 'High Training Educational Institute. Instituto Superior de Artes Culinarias',
                                                    'Escuela Profesional Gastronómica y Alta Cocina' => 'Escuela Profesional Gastronómica y Alta Cocina',
                                                    'CEAC Centro de Estudios de Artes Culinarias' => 'CEAC Centro de Estudios de Artes Culinarias',
                                                    'Centro de Estudios Gastronómicos Arts Nova CEGAVEN">Centro de Estudios Gastronómicos Arts Nova CEGAVEN' => 'Centro de Estudios Gastronómicos Arts Nova CEGAVEN">Centro de Estudios Gastronómicos Arts Nova CEGAVEN',
                                                    'Asociación Culinaria de Venezuela' => 'Asociación Culinaria de Venezuela',
                                                    'Cocinarte. Centro de Investigación y Desarrollo Gastronómico' => 'Cocinarte. Centro de Investigación y Desarrollo Gastronómico',
                                                    'La Cocotte Espacio Gastronómico C.A.' => 'La Cocotte Espacio Gastronómico C.A.',
                                                    'La New Cuisine Centro de Capacitación Gastronómica' => 'La New Cuisine Centro de Capacitación Gastronómica',
                                                    'Le Gourmet´s Centro de Estudio de las Artes Culinarias C.E.A.C' => 'Le Gourmet´s Centro de Estudio de las Artes Culinarias C.E.A.C',
                                                    'Instituto Gastronómico de Venezuela' => 'Instituto Gastronómico de Venezuela',
                                                    'Laurus Instituto de Estudios Culinarios' => 'Laurus Instituto de Estudios Culinarios',
                                                    'Bettina Cuisine' => 'Bettina Cuisine',
                                                    'Academia Culinaria La Cocina del Chef' => 'Academia Culinaria La Cocina del Chef',
                                                    'Instituto Escuela de Artes Gastronómicas Cheff Milenium' => 'Instituto Escuela de Artes Gastronómicas Cheff Milenium',
                                                    'Escuela Gastronómica El Perejil' => 'Escuela Gastronómica El Perejil',
                                                    'Escuela Gastronómica La Aceituna' => 'Escuela Gastronómica La Aceituna',
                                                    'Academia de Artes Culinarias Da Filippo' => 'Academia de Artes Culinarias Da Filippo',
                                                    'Centro de Estudios Gastronómicos de Aragua' => 'Centro de Estudios Gastronómicos de Aragua',
                                                    'Academia Gastronómica Al Fogon' => 'Academia Gastronómica Al Fogon',
                                                    'Instituto de Enseñanzas de las Artes Culinarias (INEARC)' => 'Instituto de Enseñanzas de las Artes Culinarias (INEARC)',
                                                    'Escuela Latinoamericana de Molinería (ESLAMO)' => 'Escuela Latinoamericana de Molinería (ESLAMO)',
                                                    'Centro Educativo Instituto de Arte Culinario Carlos Soto' => 'Centro Educativo Instituto de Arte Culinario Carlos Soto',
                                                    'Instituto gastronómico latinoamericano INGALA Barquisimeto' => 'Instituto gastronómico latinoamericano INGALA Barquisimeto',
                                                    'La New Cuisine Centro de Estudios Gastronómicos' => 'La New Cuisine Centro de Estudios Gastronómicos',
                                                    'Escuela de Gastronomía Adelis Sisiruca' => 'Escuela de Gastronomía Adelis Sisiruca',
                                                    'Le Gourmet Cuisine' => 'Le Gourmet Cuisine',
                                                    'C.U. Hotel Escuela de los Andes Venezolanos' => 'C.U. Hotel Escuela de los Andes Venezolanos',
                                                    'Corporación Gastronómica de Los Andes' => 'Corporación Gastronómica de Los Andes',
                                                    'Sociedad Gastronómica de Mérida, Venezuela' => 'Sociedad Gastronómica de Mérida, Venezuela',
                                                    'Sommeliers de Venezuela' => 'Sommeliers de Venezuela',
                                                    'L\'Escole Du Chef - Escuela Integral de Alta Cocina Mérida' => 'L\'Escole Du Chef - Escuela Integral de Alta Cocina Mérida',
                                                    'Academia de Formación Gastronómica de Occidente (AFOGO)' => 'Academia de Formación Gastronómica de Occidente (AFOGO)',
                                                    'Le Petit Chef Academia Gastronómica' => 'Le Petit Chef Academia Gastronómica',
                                                    'Centro de Formacion Escuela Alta Cocina Marie Antoine Careme' => 'Centro de Formacion Escuela Alta Cocina Marie Antoine Careme',
                                                    'Xevvyx\'s Patisserie' => 'Xevvyx\'s Patisserie',
                                                    'Centro Educativo Gastronómico Alejandro Magno, C.A. Cegama' => 'Centro Educativo Gastronómico Alejandro Magno, C.A. Cegama',
                                                    'Centro Educativo Gastronomico Concasse' => 'Centro Educativo Gastronomico Concasse',
                                                    'Instituto de Artes Culinarias Escoffier' => 'Instituto de Artes Culinarias Escoffier',
                                                    'Parmentier' => 'Parmentier',
                                                    'Espacio Gastronómico Escuela y Club de Cocina' => 'Espacio Gastronómico Escuela y Club de Cocina',
                                                    'Escuela Culinaria Ernesto González' => 'Escuela Culinaria Ernesto González',
                                                    'Cuisine Art' => 'Cuisine Art',
                                                    'Ciboulette Escuela de Alta Cocina' => 'Ciboulette Escuela de Alta Cocina',
                                                    'Instituto Culinario y Turístico del Caribe' => 'Instituto Culinario y Turístico del Caribe',
                                                    'Instituto Iberoamericano de Recreación, Turismo y Gastronomía' => 'Instituto Iberoamericano de Recreación, Turismo y Gastronomía',
                                                    'Escuela Gastronómica César Cardini' => 'Escuela Gastronómica César Cardini',
                                                    'Escuela Gastronómica ASOCHEF\'s' => 'Escuela Gastronómica ASOCHEF\'s',
                                                    'IPG. Instituto Profesional de Gastronomía y Hotelería de Oriente' => 'IPG. Instituto Profesional de Gastronomía y Hotelería de Oriente',
                                                    'Escuela de cocina El Plazas' => 'Escuela de cocina El Plaza s',
                                                    'Extensión de la Facultad de Agronomía de la UCV' => 'Extensión de la Facultad de Agronomía de la UCV',
                                                    'Academia Gastronómica Guacara' => 'Academia Gastronómica Guacara'),
                                                null,
                                                ['class' => 'form-control col-md-6'])
                                !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Editar
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection