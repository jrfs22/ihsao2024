<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top glass-effect">
    <div class="container-fluid">
        <a class="navbar-brand ms-xxl-5 ms-xl-5 ms-lg-5 ms-md-5 ms-0 logo" href="#">
            {{-- <img src="{{ asset('assets/img/default/navbar-icon.png') }}" alt="Logo" width="166" height="60"
                class="d-inline-block align-text-top"> --}}
                <img src="{{ asset('assets/img/default/maskot.webp') }}" width="30px" height="37px">
                <span></span>
                <img src="{{ asset('assets/img/default/himaksi.png') }}" width="116px" height="60px" alt="Logo himaksi">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-xxl-5 ms-xl-5 ms-lg-5 ms-md-5 ms-0 p-3 rounded-3" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll justify-content-center w-100 gap-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" id="beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#lomba">Tentang
                        Lomba</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak Kami</a>
                </li>
            </ul>
            <div class="button d-flex gap-3">
                <a href="{{ route('daftar-lomba') }}" class="btn btn-info">Daftar</a>
                <a href="{{ route('login') }}" class="me-4 btn btn-outline-info">Masuk</a>
            </div>
        </div>
    </div>
</nav>
