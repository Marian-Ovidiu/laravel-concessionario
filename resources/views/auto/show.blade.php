@extends('templates.base')

@section('title', 'Create Auto')

@section('content')


    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$auto->pic}}" alt="Card image cap">
        <div class="card-body" style="background-color: #454d55;">
            <h5 class="card-title" style="color:black">{{$auto->model_name}}</h5>
            <p class="card-text" style="color:black">Cilindrata: {{$auto->cubic_capacity}} cc</p>
            <p class="card-text" style="color:black">Max speed: {{$auto->max_speed}} Km/h</p>
        </div>
    </div>

@endsection
