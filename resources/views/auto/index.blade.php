@extends('templates.base')

@section('title', 'Create Auto')

@section('content')

<table class="table table-striped table-dark" style="width: 75%; margin: 15px auto;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Model Name</th>
        <th scope="col">Cubic Capacity</th>
        <th scope="col">Max Speed</th>
        <th scope="col">Pic</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($auto as $car)
      <tr>
        <td scope="row">{{$car->id}}</td>
        <td scope="row">{{$car->model_name}}</td>
        <td scope="row">{{$car->cubic_capacity}}</td>
        <td scope="row">{{$car->max_speed}}</td>
        <td scope="row" style="text-align: center;"><img src="{{$car->pic}}" alt="img" style="width: 200px;"></td>
    </tr>
      @endforeach
    </tbody>
  </table>
@endsection
