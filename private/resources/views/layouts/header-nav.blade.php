<nav>
    <div class="container">
        <div class="nav-wrapper">
            <a href="{{ url('/') }}" class="brand-logo">Bike Register</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                @if( Auth::guest() )
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li><a href="{{ url('/logout') }}"> {{Auth::user()->name}} | Logout</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>