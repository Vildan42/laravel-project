@extends('layouts.main')
@section('content')
    <div>
        <a href="{{ route('cars.create')}}" class="btn btn-primary mb-3">Create</a>
    </div>
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

            @foreach($cars as $car)
                <tr>
                    <th scope="row">{{$car->id}}</th>
                    <td>{{$car->model}}</td>
                    <td>{{$car->company}}</td>
                    <td>{{$car->weight}}</td>
                    <td></td>
                    <td><a href="{{ route('cars.show', $car->id) }}">Show</a></td>
                    <td><a href="{{ route('cars.edit', $car->id) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('cars.delete', $car->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

<head>
    <style>
        .green-button {
            background-color: green;
            color: white;
            font-size: 13px;
            padding: 7px 10px;
            border: none;
            border-radius: 2px;
            cursor: pointer;
        }

        .green-button:hover {
            background-color: darkgreen;
        }

        .table {
            width: 30%;
            margin-bottom: 10px;
            border: 5px solid #228b22;
            border-top: 3px solid #228b22;
            border-collapse: collapse;
        }

        .table th {
            font-weight: bold;
            padding: 5px;
            background: #90ee90;
            border: 3px solid #228b22;
        }
        .table td {
            padding: 3px;
            border: 3px solid #228b22;
            border-bottom: 2px solid #228b22;
        }
    </style>
</head>


