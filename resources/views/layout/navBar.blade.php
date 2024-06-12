<nav class="navbar bg-black">

    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ url('storage/img/logo.png') }}" class=" bg-black"
                alt="Logo"></a>

        <div class="col-md-3 d-flex flex-row">
            <a class="nav-link m-3" href="{{ route('Homepage.index') }}">
                <h1 class="fa-solid fa-house text-light"></h1>
            </a>
            <a class="nav-link m-3" href="{{ route('inventario.index', Auth::id()) }}">
                <h1 class="fa-solid fa-wallet text-light"></h1>
            </a>
            <a class="nav-link m-3" href="{{ route('perfil.index', Auth::id()) }}">
                <h1 class="fa-solid fa-user text-light"></h1>
            </a>
            <a class="nav-link m-3" href="{{ route('logout') }}">
                <h1 class="fa-solid fa-door-open text-warning"></h1>
            </a>
        </div>

    </div>
</nav>
