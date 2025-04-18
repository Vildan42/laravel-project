@extends('layouts.app')

@section('content')
    <div class="car-container">
        <div class="car-card">
            @if($car->image)
                <img src="{{ asset($car->image->path) }}" alt="{{ $car->model }}">
            @else
                <img src="{{ asset('default.jpg') }}" alt="No image">
            @endif

            <h3>{{ $car->company }} {{ $car->model }}</h3>

            <ul class="car-details">
                <li><strong>Модель:</strong> {{ $car->model }}</li>
                <li><strong>Марка:</strong> {{ $car->company }}</li>
                <li><strong>Вес:</strong> {{ $car->weight }}</li>
            </ul>

            <a href="{{ route('home') }}" class="car-back-button">Назад</a>
        </div>
    </div>

    <style>
        .car-container {
            display: flex;
            justify-content: center;
            padding: 40px;
        }

        .car-card {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .car-card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .car-card h3 {
            margin-bottom: 15px;
            font-size: 22px;
        }

        .car-details {
            list-style: none;
            padding: 0;
            text-align: left;
            margin-bottom: 20px;
        }

        .car-details li {
            margin-bottom: 5px;
        }

        .car-back-button {
            display: inline-block;
            padding: 8px 14px;
            background-color: green;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .car-back-button:hover {
            background-color: darkgreen;
        }
    </style>
@endsection
