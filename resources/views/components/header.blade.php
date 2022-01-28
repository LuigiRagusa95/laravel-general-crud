<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Jokes</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('jokes') ? 'active' : '' }}"
                            href="{{ route('jokes.index') }}">List</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @if (Request::route()->getName() === "jokes.index")
                    <li class="nav-item">
                        <a class="btn btn-primary py-1" aria-current="page" href="{{ route('jokes.create') }}">Add
                            New</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>