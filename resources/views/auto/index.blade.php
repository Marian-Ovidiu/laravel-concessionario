@extends('templates.base')

@section('title', 'Create Auto')

@section('content')

<table class="table table-striped table-dark" style="width: 80%; margin: 15px auto;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Model Name</th>
        <th scope="col">Cubic Capacity</th>
        <th scope="col">Max Speed</th>
        <th scope="col">Pic</th>
        <th scope="col">Created at</th>
        <th scope="col">Action</th>
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
        <td scope="row">{{$car->created_at}}</td>
        <td>
            <a href="{{route('auto.show', ['auto'=>$car])}}" style="display: block; margin-bottom: 5px;">
                <button class="btn btn-primary" style="width: 50px;">
                    <i class="fas fa-eye"></i>
                </button>
            </a>
            <a href="{{route('auto.edit', ['auto'=>$car])}}" style="display: block; margin-bottom: 5px;">
                <button class="btn btn-primary" style="width: 50px;">
                    <i class="fas fa-edit"></i>
                </button>
            </a>
            <form action="{{route('auto.destroy', ['auto'=>$car])}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-primary" style="width: 50px;">
                    <i class="fas fa-meteor"></i>
                </button>
            </form>
        </td>
    </tr>
      @endforeach
    </tbody>
  </table>
@endsection
