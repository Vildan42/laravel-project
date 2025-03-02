@extends('layouts.main')
@section('content')
    <div>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Model</th>
                <th scope="col">Company</th>
                <th scope="col">Weight</th>
                <th scope="col">Image</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$car->id}}</th>
                    <td>{{$car->model}}</td>
                    <td>{{$car->company}}</td>
                    <td>{{$car->weight}}</td>
                    <td></td>
                    <td><a href="{{ route('cars.edit', $car->id) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('cars.delete', $car->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            <tbody>
        </table>
    </div>
    <div>
        <a href="{{route('cars.index')}}">Назад</a>
    </div>
@endsection
