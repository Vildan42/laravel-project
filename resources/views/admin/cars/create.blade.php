@extends('admin.layouts.main')

@section('content')
    <div>
        <br>
        @include('admin.cars.form', [
            'action' => route('cars.store'),
            'car' => null,
            'buttonText' => 'Create'
        ])
    </div>
@endsection

{{--@section('scripts')--}}
{{--    <script src="{{ asset('js/image-uploader.js') }}"></script>--}}
{{--@endsection--}}
