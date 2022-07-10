<nav class="navbar navbar-expand-lg navbar-dark shadow p-2 sticky-top" style="background-color: #199D6B;">
    <div class="container-fluid my-0">
        <a href="/">
            <img  src="{{ asset('img/Lanjalan.png') }}" class="img-fluid mx-4" alt="Logo Lanjalan" style="width: 10rem; height: auto;">
        </a>    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active"  href="/">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/wisatawisata">Wisata</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/bundlebundle">Bundle</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/traveltravel">Travel Agent</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/riwayatpesanan">Pemesanan</a>
              </li>
            </ul>
        <div class="d-flex">
            <ul class="navbar-nav mx-3">
                <li class="nav-item">
                    <a dusk="login" class="nav-link" href="{{ route('login') }}">
                        <button type="button" class="btn btn-outline-warning" style="border-radius: 0.5rem; ">Admin / Mitra</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>