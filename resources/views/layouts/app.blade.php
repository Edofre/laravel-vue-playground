<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Stylesheets -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<script>--}}
        {{--window.Laravel = {{ json_encode([--}}
            {{--'csrfToken' => csrf_token(),--}}
        {{--]) }}--}}
    {{--</script>--}}
</head>
<body>

@include('layouts.blocks._nav')

<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                @yield('title')
            </h1>
        </div>
    </div>
</section>

@yield('content')

@include('layouts.blocks._footer')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>