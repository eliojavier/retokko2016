@extends('app')

@section('content')<script>
    $(function() {
        var availableTags = [
            "Aceite de soja",
            "Aceite de maíz",
            "Aceite de oliva",
            "Nata o crema de leche",
            "Yogur",
            "Leche",
            "Helado",
            "Queso",
            "Setas",
            "Hongos",
            "Coles",
            "Legumbres",
            "Alubias",
            "Garbanzos",
            "Lentejas",
            "Soja",
            "Pimientas",
            "Patata",
            "Raíces y tubérculos",
            "Lechugas",
            "Acelga",
            "Alcachofa",
            "Batata",
            "Berenjena",
            "Berro",
            "Brócoli",
            "Brecol",
            "Calabacín",
            "Calabaza",
            "Cardo",
            "Cebolla",
            "Cebolleta",
            "Coles de Bruselas",
            "Coliflor",
            "Endivia",
            "Tomate",
            "Zanahoria",
            "Escarola",
            "Espárrago",
            "Espinaca",
            "Guisante",
            "Habas",
            "Hinojo",
            "Judías",
            "Maíz",
            "Palmito",
            "Pepino",
            "Pimiento",
            "Puerro",
            "Remolacha",
            "Albaricoque",
            "Aguacate",
            "Cereza",
            "Mango",
            "Melocotones",
            "Nectarina",
            "Ciruela",
            "Fruta del bosque",
            "Frutos secos",
            "Membrillo",
            "Peras",
            "Manzanas",
            "Uvas",
            "Fruta seca",
            "Frambuesa",
            "Fresa",
            "Granada",
            "Higos",
            "Kiwi",
            "Limón",
            "Mandarina",
            "Melón",
            "Naranja",
            "Piña",
            "Plátano",
            "Pomelo",
            "Sandía",
            "Cereales",
            "Harinas",
            "Panes",
            "Arroz",
            "Pasta",
            "Atún",
            "Anchoa",
            "Bacalao",
            "Bonito",
            "Boquerón",
            "Caballa",
            "Chicharro",
            "Corvina",
            "Dorada",
            "Lenguado",
            "Lubina",
            "Merluza",
            "Mero",
            "Palometa",
            "Pejerrey",
            "Rape",
            "Rodaballo",
            "Salmón",
            "Sardina",
            "Trucha",
            "Camarón",
            "Cigala",
            "Gamba",
            "Langostino",
            "Percebe",
            "Almeja",
            "Calamar",
            "Mejillón",
            "Ostra",
            "Pulpo",
            "Sepia",
            "Vieira",
            "Cordero",
            "Ovejas",
            "Ternera",
            "Buey",
            "Caballo",
            "Cabra",
            "Cerdo",
            "Vaca",
            "Avestruz",
            "Paloma",
            "Perdiz",
            "Patos",
            "Pavos",
            "Ocas",
            "Gallinas",
            "Pollo",
            "capones",
            "huevos : Clara, yema.",
            "Bison",
            "Conejo",
            "Liebre",
            "Oso",
            "Ciervo",
            "Jabalí",
            "Patos",
            "Faisanes",
            "Ocas salvajes.",
            "Ancas de rana",
            "Caracoles",
            "Alcoholes fuertes",
            "Cervezas",
            "Sidras",
            "Licores",
            "Vino blanco",
            "Vino caliente",
            "Vino tinto",
            "Vino rosado",
            "Whisky",
            "Cafés",
            "Cola",
            "Agua",
            "Agua mineral",
            "Agua gaseosa",
            "Zumo",
            "Tés",
            "Horchata",
            "Cerveza sin alcohol"
        ];
        $( "#tags" ).autocomplete({
            source: availableTags
        });
    });
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Agregar Receta</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Por favor complete los campos requeridos</strong><br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::open(['url'=>'recetas', 'files'=>'true', 'class'=>'form-horizontal', 'role'=>'form'])!!}
                        @include('recetas.form')

                        <div class="form-group">
                            {!! Form::submit('Agregar Receta', ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection