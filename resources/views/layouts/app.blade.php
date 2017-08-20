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
</head>
<body>
<nav class="navbar">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            {{ config('app.name', 'Laravel') }}
        </a>

        @if (Auth::guest())
            <a class="navbar-item" href="{{ route('login') }}">Login</a>
            <a class="navbar-item" href="{{ route('register') }}">Register</a>
        @else
            <div class="navbar-item has-dropdown">
                <a class="navbar-link">
                    {{ Auth::user()->name }}
                </a>

                <div class="navbar-dropdown">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"
                       class="navbar-item">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        @endif
        <div class="navbar-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>

<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Primary title
            </h1>
            <h2 class="subtitle">
                Primary subtitle
            </h2>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
            </p>
            <p>
                <a class="icon" href="https://github.com/jgthms/bulma">
                    <i class="fa fa-github"></i>
                </a>
            </p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>