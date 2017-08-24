<nav class="navbar">
    <div class="navbar-brand">
        <a class="navbar-item" href="http://bulma.io">
            {{ config('app.name', 'Laravel Vue Playground') }}
        </a>
        <div class="navbar-burger burger" data-target="navMenubd-example">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navMenubd-example" class="navbar-menu">
        <div class="navbar-start">
            @if (Auth::guest())
                <a class="navbar-item" href="{{ route('login') }}">Login</a>
                <a class="navbar-item" href="{{ route('register') }}">Register</a>
            @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <div class="navbar-link">
                        {{ Auth::user()->name }}
                    </div>
                    <div id="moreDropdown" class="navbar-dropdown ">
                        <a href="{{ route('logout') }}" class="navbar-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        <div class="level is-mobile">
                            <div class="level-item">
                                <div class="level-item">
                                    Logout
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            @endif
        </div>
        <div class="navbar-end">
            <a class="navbar-item is-hidden-desktop-only" href="https://github.com/Edofre/laravel-vue-playground" target="_blank">
                <span class="icon" style="color: #333;">
                    <i class="fa fa-github"></i>
                </span>
            </a>
            <a class="navbar-item is-hidden-desktop-only" href="https://twitter.com/edofre" target="_blank">
                <span class="icon" style="color: #55acee;">
                    <i class="fa fa-twitter"></i>
                </span>
            </a>
            <div class="navbar-item">
                <div class="field is-grouped">
                    <p class="control">
                        <a class="button is-primary" href="https://github.com/Edofre/laravel-vue-playground/archive/master.zip">
                            <span class="icon">
                                <i class="fa fa-download"></i>
                            </span>
                            <span>Download</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</nav>