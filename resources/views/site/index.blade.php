@extends('app')

@section('content')
    <div class="container">
        <div class="col-xs-6 col-md-offset-3">
            <img src="{{asset('/img/logo.png')}}" alt="KKO Real"/>
        </div>
    </div>

    <div class="container-fluid main-content">
        <div class="row margin-top-20">
            <div class="col-md-6 img-responsive">
                <img src="{{asset('/img/cake_left.jpg')}}" alt=""/>
            </div>
            <div class="col-md-6 img-responsive">
                <img src="{{asset('/img/cake_left.jpg')}}" alt=""/>
            </div>
        </div>
    </div>

    <!--youtube iframe-->
    <div style="text-align: center;" class="margin-top-20">
        <iframe class="embed-video" src="https://www.youtube.com/embed/qH7xu6JW2wA?autoplay=0" frameborder="0" width="560" height="315"> </iframe>
    </div>
    <!-- end youtube iframe-->

    <div class="container-fluid main-content">
        <div class="row margin-top-20">
            <div class="col-md-6 img-responsive">
                <img src="{{asset('/img/cake_left.jpg')}}" alt=""/>
            </div>
            <div class="col-md-6 img-responsive">
                <img src="{{asset('/img/cake_left.jpg')}}" alt=""/>
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="hexagon"></div>
    </div>

    <!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{asset('/img/slider_t.jpg')}}" alt="...">
                            <div class="carousel-caption">
                                <h3>Caption Text</h3>
                            </div>
                        </div>
                        <div class="item">
                            <!--<img src="http://placehold.it/1200x315" alt="...">-->
                            <img src="{{asset('/img/slider_t.jpg')}}" alt="...">
                            <div class="carousel-caption">
                                <h3>Caption Text</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset('/img/slider_t.jpg')}}" alt="...">
                            <div class="carousel-caption">
                                <h3>Caption Text</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end Slider -->
@endsection