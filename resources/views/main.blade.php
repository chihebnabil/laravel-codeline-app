<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="language" content="{{ App::getLocale() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="{{ asset('favicon.ico?v=1') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body class="bg-light">
<main>
    <div id="wrapper">
        @include('partials.header')
        <div class="container">
            @yield('content')
        </div>
    </div>
</main>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>