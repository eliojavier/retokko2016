<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Reto KKO | 9no Concurso Gastronómico</title>

    <meta property="og:title" content="Reto KKO | 9no Concurso Gastronómico" />
    <meta property="og:description" content="¿Estás listo para formar parte de una experiencia gastronómica inigualable en Venezuela?
                                            Demuéstranos de qué estas hecho presentando tu mejor receta con cacao,
                                            supera los desafíos de nuestra 9na edición y gana fabulosos premios.
                                            Regístrate aquí." />
    <meta property="og:image" content="http://retokkoreal.mgideas.net/retoKKO.jpg" />

    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('/js/datepicker.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.youtubepopup.min.js') }}"></script>
    <script src="{{ asset('/js/youtube.js') }}"></script>
    <script src="{{ asset('/js/youtubemodal.js') }}"></script>
    <script src="{{ asset('/js/googleanalytics.js') }}"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="{{ asset('/css/mycss.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body>
<!--header-->
<header>
    <div class="container-fluid top-purple">
        <div class="row">
        <div class="text-center">
            <h1>9no Concurso Gastronómico</h1>
        </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-1 col-xs-12">

        </div>
        <div class="col-md-8 img-responsive col-xs-12">
            <img src="{{asset('/img/logokkoreal.png')}}" alt="9no Concurso Gastronomico"/>
        </div>
        <div class="col-md-3 img-responsive">
            <img src="{{asset('/img/RS_e2.png')}}" alt="Redes Sociales"/>
        </div>
    </div>
</div>

<div class="container">
    <div class="navbar navbar-default">
        <div class="row">
            <button class="navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="text-center collapse navbar-collapse navHeaderCollapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">INICIO</a></li>
                    <li><a href="{{ url('jurado') }}">JURADO</a></li>
                    <li><a href="{{ url('ganadores') }}">GANADORES 2015</a></li>
                    <li><a href="{{ url('recetas') }}">KKO RECETAS</a></li>
                    <li><a href="{{ url('capitulos') }}">CAPÍTULOS</a></li>
                    <li><a href="{{ url('clasificados') }}">CLASIFICADOS</a></li>
                    <li><a href="{{ url('testimoniales') }}">TESTIMONIALES</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@yield('content')

<footer class="margin-top-20">
    <div class="row strip">
    </div>
    <div class="container">
        <div class="row text-center purple-font">
            <div class="col-md-3">
            </div>

            <div class="col-md-2">
                <h3>DIRECCIÓN</h3>
                <p>XXXXXX</p>
                <p>XXXXX</p>
                <p>XXXX</p>
            </div>

            <div class="col-md-2">
                <h3>CONTACTO</h3>
                <p>XXXXXX</p>
                <p>XXXXX</p>
                <p>XXXX</p>
            </div>

            <div class="col-md-2">
                <h3>HORARIO</h3>
                <p>XXXXXX</p>
                <p>XXXXX</p>
                <p>XXXX</p>
            </div>

            <div class="col-md-3">
            </div>
        </div>
    </div>
</footer>


</body>
</html>