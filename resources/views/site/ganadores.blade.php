@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row strip">

        </div>
    </div>
    <div class="container">
        <div class="row margin-top-20">
            <div class="col-md-8 col-md-offset-2">
                <img class="img-responsive" src="{{asset('/img/ganadores.jpg')}}" alt="">
            </div>
        </div>
    </div>

    <div class="margin-top-20"></div>
    @include('site.secciones.twitter_seccion')

    @include('site.secciones.youtube_iframe')

    @include('site.secciones.capacitacion_seccion')

@endsection