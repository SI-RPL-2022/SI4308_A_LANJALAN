<nav class="navbar navbar-expand-lg navbar-dark shadow p-2 sticky-top" style="background-color: #199D6B;">
    <div class="container-fluid my-0">
        <img src="{{ asset('img/Lanjalan.png') }}" class="img-fluid mx-4" alt="Logo Lanjalan" style="width: 10rem; height: auto;">
        <div class="d-flex">
            <ul class="navbar-nav mx-3">
                <li class="nav-item">
                    <a class="nav-link active" href="">
                        <button type="button" class="btn btn-primary" style="border-radius: 0.5rem">Register</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        <button type="button" class="btn btn-outline-warning" style="border-radius: 0.5rem; ">Log in</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>