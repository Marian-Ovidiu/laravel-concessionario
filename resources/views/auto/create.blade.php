@extends('templates.base')

@section('title', 'Create Auto')

@section('content')

    <form action="{{route('auto.store')}}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="model_name">Model Name</label>
            <input class="form-control {{$errors->has('model_name') ? 'is-invalid' : ''}}" type="text"
                name="model_name" placeholder="Name Model" value = "">
            <div class="invalid-feedback">
                {{$errors->first('model_name')}}
            </div>
        </div>

        <div class="form-group">
            <label for="cubic_capacity">Cubic Capacity</label>
            <input class="form-control {{$errors->has('cubic_capacity') ? 'is-invalid' : ''}}" type="text"
                name="cubic_capacity" placeholder="Cubic Capacity" value = "">
            <div class="invalid-feedback">
                {{$errors->first('cubic_capacity')}}
            </div>
        </div>

        <div class="form-group">
            <label for="max_speed">Max Speed</label>
            <input class="form-control {{$errors->has('max_speed') ? 'is-invalid' : ''}}" type="text"
                name="max_speed" placeholder="Max Speed" value = "">
            <div class="invalid-feedback">
                {{$errors->first('max_speed')}}
            </div>
        </div>

        <div class="form-group">
            <label for="pic">Pic</label>
            <input class="form-control {{$errors->has('pic') ? 'is-invalid' : ''}}" type="text"
                name="pic" placeholder="Pic" value = "">
            <div class="invalid-feedback">
                {{$errors->first('pic')}}
            </div>
        </div>

        <button type="submit" class="btn btn-dark">
            Inserisci auto
        </button>

    </form>


@endsection
