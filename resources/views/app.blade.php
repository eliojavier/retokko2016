<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reto KKO | 8vo Concurso Gastronómico</title>

    <!-- FavIcon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

    <meta property="og:title" content="Reto KKO | 8vo Concurso Gastronómico" />
    <meta property="og:description" content="¿Estás listo para formar parte de una experiencia gastronómica inigualable en Venezuela?
                                            Demuéstranos de qué estas hecho presentando tu mejor receta con cacao, supera los desafíos de nuestra 8va edición y gana fabulosos premios.
                                            Regístrate aquí." />
    <meta property="og:image" content="http://retokkoreal.mgideas.net/retoKKO.jpg" />

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/mycss.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">Esta usando <strong>Un navegador viejo</strong>. Por favor<a href="http://browsehappy.com/">Actualize su navegador</a> y mejore su experiencía.</p>
<![endif]-->

<header>
    <div class="container">
            9no Concurso Gastronómico
    </div>
</header>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="{{asset('/img/logokkoreal.png')}}" alt="9no Concurso Gastronomico"/>
            </div>
            <div class="col-md-4">
                <img src="{{asset('/img/RS_e.png')}}" alt="Redes Sociales"/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 margin-top-20">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li{!! Request::is('/') ? 'class="active"' : null !!}><a href="{{ url('/') }}">INICIO</a></li>
                            <li{!! Request::is('jurado') ? 'class="active"' : null !!}><a href="{{ url('jurado') }}">JURADO</a></li>
                            <li{!! Request::is('ganadores') ? 'class="active"' : null !!}><a href="{{ url('ganadores') }}">GANADORES 2015</a></li>
                            <li{!! Request::is('recetas') ? 'class="active"' : null !!}><a href="{{ url('recetas') }}">KKO RECETAS</a></li>
                            <li{!! Request::is('capitulos') ? 'class="active"' : null !!}><a href="{{ url('capitulos') }}">CAPÍTULOS</a></li>
                            <li{!! Request::is('clasificados') ? 'class="active"' : null !!}><a href="{{ url('clasificados') }}">CLASIFICADOS</a></li>
                            <li{!! Request::is('testimoniales') ? 'class="active"' : null !!}><a href="{{ url('testimoniales') }}">TESTIMONIALES</a></li>
                        @if (Auth::guest())
                            <!--<li{!! Request::is('auth/register') ? ' class="active"' : null !!}><a href="{{ url('auth/register') }}">INSCRIPCIONES</a></li>-->
                            @else
                                <li{!! Request::is('users') ? ' class="active"' : null !!}><a href="{{ url('users') }}">PERFIL</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container min-container page-wrap">
        @yield('content')
    </div>

    <footer class="margin-top-20">
        <div class="container">
            <div class="row">
                @yield('footer')
                <div class="col-xs-7 col-sm-6  col-md-8">
                <!-- <p>&copy; MGIdeas 2015</p>-->
                    <ul class="list-inline " style="padding-top: 10px;margin-bottom: 0;">
                        <li><a target="_blank" href="https://www.facebook.com/kkorealve?ref=ts&fref=ts"><img src="{{asset('/img/facebook.png')}}" alt="facebook"/></a></li>
                        <li><a target="_blank" href="https://twitter.com/KKORealVe"><img src="{{asset('/img/twitter.png')}}" alt="twitter"/></a></li>
                        <li><a target="_blank" href="https://instagram.com/KKORealVE"><img  src="{{asset('/img/insta.png')}}" alt="instagram"/></a></li>
                        <li><h3 style="color: #da9400;margin-top: 0">
                                <a href="mailto:reto@kkoreal.com">CONTÁCTANOS</a>
                            </h3></li>
                    </ul>

                </div>
                <div class="col-xs-5 col-sm-6 col-md-4">
                    <ul class="list-inline pull-right" style="padding-top: 15px;margin-bottom: 0;" >
                        <li><a href="{{ url('rules') }}">REGLAS</a></li>
                        <li class="hidden-xs"><a href="{{ url('terms') }}">TÉRMINOS Y CONDICIONES</a></li>
                        <li class="visible-xs-inline-block"><a href="#"><span style="font-size: 10px">TÉRMINOS Y CONDICIONES</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


@yield('before-script-end')
<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>


@yield('after-script-end')
<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
<script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/js/messages_es.min.js') }}"></script>
<script>

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-64894627-1', 'auto');
    ga('send', 'pageview');

    var form = $("form");
    if(form.length)        {
        form.validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            lang: 'es'            });
    }
    if( $('#my_recipe').length )
    {
        CKEDITOR.replace('my_recipe',
                {                language: 'es'            });        }
</script>

</body>
</html>
