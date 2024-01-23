@props(['title', 'tanggal'])

<div class="card-timeline" data-aos="fade-left">
    <h5>{{ $tanggal }}</h5>
    <span class="text-muted">
        {{ $title }}
    </span>
</div>
