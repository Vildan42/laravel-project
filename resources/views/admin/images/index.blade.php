@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <h2 class="mb-4">Галерея изображений</h2>
        <div class="row">
            @foreach($images as $image)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('public.uploads' . $image->path) }}" class="card-img-top" alt="Image">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
