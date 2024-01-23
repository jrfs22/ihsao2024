@props([
    'title',
    'deskripsi',
    'route'
])
<div class="card card-lomba" data-aos="fade-up">
    <div class="card-body front">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">
            {{ $deskripsi }}
        </p>
    </div>
    <div class="card-body back">
        <div class="inner">
            <a target="_blank" href="{{ $route }}" class="btn btn-info">Unduh Rulebook</a>
        </div>
    </div>
</div>
{{-- 
<div class="card">
    <div class="lomba">
        <div class="maskot d-flex align-items-center justify-content-center">
            <img loading="lazy" src="{{ asset('assets/img/maskot/' . $maskot . '.webp') }}" alt="Maskot {{ $title }}">
        </div>
        <h3 class="text-center {{ $long }}">{{ $title }}</h3>
    </div>
    <div class="deskripsi">
        <div class="content">
            <h3 class="text-center {{ $long }}">{{ $title }}</h3>
            <p class="text-center">{{ $deskripsi }}</p>
            <a href="{{ $link }}" class="btn btn-outline-warning">Click Here</a>
        </div>
    </div>
</div> --}}
