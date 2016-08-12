<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('themes/backend/build.css') }}">
    <title>@yield('title', trans('backend.title'))</title>
</head>
<body class="{{ Helpers\registry('body.class', 'default') }}">
    @yield('content')

    {{-- scripts --}}
    <script src="{{ asset('themes/backend/build.js') }}"></script>
</body>
</html>
