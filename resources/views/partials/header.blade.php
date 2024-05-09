<header>
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ Vite::asset('/resources/img/logo.png') }}" style="width: 5rem" alt="">
            </a>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'guests.home' ? 'my_active' : '' }}"
                            href="#" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'guests.movies.index' ? 'my_active' : '' }}"
                            href="#">Movies</a>
                    </li>

                </ul>
                {{-- <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form> --}}
            </div>
        </div>
    </nav>


</header>
