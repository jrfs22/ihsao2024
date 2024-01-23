@props([
    'gambar' => 'foto-1.png',
    'title' => ''
    ])
<div class="card card-gallery" style="background-image: url('/assets/img/gallery/{{ $gambar }}'); " data-aos="fade-up">
    <div class="content" >
        <h3>{{ $title }}</h3>
    </div>
</div>
