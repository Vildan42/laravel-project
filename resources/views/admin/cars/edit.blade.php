@extends('layouts.main')
@section('content')
    <div>
        <br><form action="{{ route('cars.update', $car->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="model">Model</label>
                <input  type="text"  name="model" class="form-control" id="model" placeholder="Model" value="{{$car->model}}">
                @error('model')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" name="company" class="form-control" id="company" placeholder="Company" value="{{$car->company}}">
                @error('company')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="weight">Weight</label>
                <input type="number" name="weight" class="form-control" id="weight" placeholder="Weight" value="{{$car->weight}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

<head>
    <style>
        .btn {
            background-color: green;
            color: white;
            font-size: 13px;
            padding: 7px 10px;
            border: none;
            border-radius: 2px;
            cursor: pointer;
        }
    </style>
</head>
