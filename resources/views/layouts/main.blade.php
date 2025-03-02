<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
</head>
<body>
<main>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div id="list-example" class="list-group">
                <a class="btn" href="{{route('cars.index')}}">Cars</a>
                <a class="btn" href="/admin/planes">Planes</a>
{{--                <a class="list-group-item list-group-item-action" href="/admin/planes">Planes</a>--}}
            </div>
        </div>
        <div class="col-md-9" id="app">
            @yield('content')
        </div>
    </div>
</div>
</main>
</body>

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
