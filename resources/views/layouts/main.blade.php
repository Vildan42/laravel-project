<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
</head>
<body>
<main>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="{{route('cars.index')}}">Cars</a>
                <a class="list-group-item list-group-item-action" href="/admin/planes">Planes</a>
            </div>
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>
</main>
</body>
