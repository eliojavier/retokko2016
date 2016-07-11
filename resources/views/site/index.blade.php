@extends('app')

@section('content')
    <!-- logo KKO Real -->
    <div class="container">
        <div class="text-center img-responsive">
            <img src="{{asset('/img/logo.png')}}" alt="KKO Real"/>
        </div>
    </div>

    @include('site.secciones.twitter_seccion')

    @include('site.secciones.youtube_iframe')

    @include('site.secciones.capacitacion_seccion')

    @include('site.secciones.slider_seccion')
@endsection