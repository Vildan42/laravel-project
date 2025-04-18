@extends('admin.layouts.main')

@section('content')
    <div>
        <br>
        @include('admin.cars.form', [
            'action' => route('cars.update', $car->id),
            'method' => 'patch',
            'car' => $car,
            'buttonText' => 'Update'
        ])
    </div>
@endsection

{{--@section('scripts')--}}
{{--    <script src="{{ asset('js/image-uploader.js') }}"></script>--}}
{{--@endsection--}}