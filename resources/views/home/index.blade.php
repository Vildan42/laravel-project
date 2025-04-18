@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach($cars as $car)
                <div class="col">
                    <div class="card h-100 text-center">
                        @if($car->image)
                            <img src="{{ asset($car->image->path) }}" class="card-img-top" alt="{{ $car->model }}">
                        @else
                            <img src="{{ asset('default.jpg') }}" class="card-img-top" alt="No image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->company }} {{ $car->model }}</h5>
                            <a href="{{ route('show', $car->id) }}" class="btn btn-primary mt-2">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
