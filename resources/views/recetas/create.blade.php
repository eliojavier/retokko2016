@extends('app')

@section('content')
    <script>
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
    <script>
        $(document).ready(function() {
            var ingredientes = []
            $("#ingredientes").val('--Cacao');

            $('#agregar').click(function() {
                if(document.getElementById('ing').value != "") {
                    ingredientes[0] = ('Cacao');
                    ingredientes.push(document.getElementById('ing').value);
                    $("#ingredientes").val("");
                    for (var i = 0; i < ingredientes.length; ++i) {
                        $("#ingredientes").val($("#ingredientes").val()
                                + '--'
                                + ingredientes[i]
                                + '\n');
                    }
                    document.getElementById('ing').value = "";
                    document.getElementById('ing').focus();
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
                if(ingredientes.length==0){
                    $("#ingredientes").val("--Cacao");
                }
            });
        });
    </script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">Agregar Receta</div>
                    <div class="panel-body">

                        @include('errors._errors')

                        {!! Form::open(['url'=>'recetas', 'files'=>'true', 'class'=>'form-horizontal', 'role'=>'form', 'name' => 'crearReceta'])!!}

                        @include('recetas._form')

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
                                </br>
                                {!! Form::submit('Agregar', ['class' => 'btn btn-primary form-control']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection