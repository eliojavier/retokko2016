@extends('app')

@section('content')

    <div class="container">
        CAPÍTULOS
    </div>

    <div class="container-hexagon">
        <div class="row">
            <div class="col-md-12">
                <div class="hexagon"></div><--!
              --><div class="hexagon"></div><--!
              --><div class="hexagon"></div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="hexagon"></div><--!
                --><div class="hexagon"></div><--!
                --><div class="hexagon"></div>
            </div>
        </div>
    </div>

    <div>
        <img src="{{asset('/img/print.jpg')}}" alt="">
    </div>
@endsection
<a href="#" data-reveal-id="myModal">Click Me For A Modal</a>

<div id="myModal" class="reveal-modal" data-reveal>
    <h2>Awesome</h2>
    <div id="player"></div>
    <a class="close-reveal-modal">&#215;</a>
</div>