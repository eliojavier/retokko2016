{{--@foreach($alergenicos as $k => $v)
    @foreach ($v as $key => $value)
        {{$value }}
    @endforeach
@endforeach
--}}

@foreach($alergenicos as $alergenico)
    <div>
        <label>{{$alergenico->id}}</label>
        <img src="{{asset('img/recetas/'.$alergenico->imagen)}}">
    </div>
@endforeach






