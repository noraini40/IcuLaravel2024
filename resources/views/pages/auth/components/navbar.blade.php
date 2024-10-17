<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('about') }}">About</a>

                {{-- }} <li class="nav-item">
                    <a class="nav-link" href="{{ route('auth.logout') }}">Sign Out</a>
                </li>--}}
                <ul class="navbar-nav ms auto">
                    @auth

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auth.logout') }}">Sign Out</a>
                        </li>
                    @endauth
                    @@guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.signin') }}">Sign Up</a>
                    </li>
                @endguest





            </ul>

        </div>
    </div>
</div>
</nav>
