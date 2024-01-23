@extends('_partials.default')
@section('title', 'Home')
@section('content')
    <section class="homepage" id="beranda">
        <div class="jumbotron bg-body-tertiary d-flex align-item-start justify-content-center flex-column">
            <div class="container">
                <span class="box-animation">
                    <img src="{{ asset('assets/img/shape/box.webp') }}" alt="" height="109" width="109">
                </span>
                <div class="row">
                    <div class="col-xx-5 col-xl-5 col-lg-5 col-md-7 col-10">
                        <div class="logo-himaksi d-flex align-items-end" data-aos="fade-right">
                            <img src="{{ asset('assets/img/default/himaksi.png') }}" alt="Logo Himaksi">
                            <span>Mempersembahkan</span>
                        </div>
                        <h1 class="title" data-aos="fade-right" data-aos-duration="1000">
                            IHSAO 2024
                        </h1>
                        <h4 class="subtitle" data-aos="fade-right" data-aos-duration="1000">
                            Pagelaran Akuntansi untuk membangun indonesia yang lebih baik
                        </h4>
                        <p class="deskripsi" data-aos="fade-right" data-aos-duration="1000">
                            IHSAO 2023 Telah hadir segera daftar jangan kelewatan kesempatan untuk berkompetisi di lomba
                            akuntansi yang bergengsi
                        </p>
                        <a href="{{ route('daftar-lomba') }}" class="btn btn-info" type="button" data-aos="fade-right"
                            data-aos-duration="1000">
                            Daftar tim / sekolah
                        </a>
                    </div>
                    {{-- <div class="col-md-1"></div> --}}
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-5 col-5">
                        <div class="container d-flex justify-content-end maskot" data-aos="fade-left">
                            <img src="{{ asset('assets/img/default/maskot.webp') }}" width="326" height="326"
                                alt="Maskot {{ config('app.name') }}" class="ms-5">
                        </div>
                    </div>
                </div>
                <span class="circle-animation">
                    <img src="{{ asset('assets/img/shape/circle.webp') }}" width="80" height="80" alt="">
                </span>
            </div>
        </div>
        <div class="lomba" id="lomba">
            <div class="container">
                <div class="header d-flex align-items-center flex-column">
                    <h5>LOMBA</h5>
                    <h1>IHSAO 2024</h1>
                </div>
                <div class="body">
                    <div class="row">
                        <div
                            class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12  mt-md-4 mt-sm-2 mt-2 mt-xx-0 mt-xl-0 mt-lg-0 mt-4">
                            <x-card.lomba title="OLIMPIADE SMA"
                                deskripsi="Lomba Olimpiade adalah lomba dalam bidang akuntansi bagi para siswa-siswi
                            SMA/SMK/Sederajat di Indonesia. Lomba olimpiade ini terdiri dari masing- masing perwakilan
                            sekolah minimal 1 tim"
                                route="{{ route('download', ['lomba' => 'olimpiade-sma']) }}" />
                        </div>
                        <div
                            class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12  mt-md-4 mt-sm-2 mt-2 mt-xx-0 mt-xl-0 mt-lg-0 mt-4">
                            <x-card.lomba title="OLIMPIADE SMK"
                                deskripsi="Lomba Olimpiade adalah lomba dalam bidang akuntansi bagi para siswa-siswi
                            SMA/SMK/Sederajat di Indonesia. Lomba olimpiade ini terdiri dari masing- masing perwakilan
                            sekolah minimal 1 tim"
                                route="{{ route('download', ['lomba' => 'olimpiade-smk']) }}" />
                        </div>
                        <div
                            class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12  mt-md-4 mt-sm-2 mt-2 mt-xx-0 mt-xl-0 mt-lg-0 mt-4">
                            <x-card.lomba title="MYOB"
                                deskripsi="Lomba MYOB adalah lomba tentang penyelesaian kasus transaksi keuangan
                            menggunakan software. Lomba MYOB ini memiliki tujuan untuk meningkatkan
                            kualitas, keterampilan, dan mengembangkan wawasan siswa-siswi dalam hal aplikasi
                            akuntansi ke dalam komputer khususnya menggunakan software MYOB"
                                route="{{ route('download', ['lomba' => 'myob']) }}" />
                        </div>
                        <div
                            class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12 mt-xxl-5 mt-xl-5 mt-lg-4 mt-md-4 mt-4">
                            <x-card.lomba title="Karya Tulis Ilmiah (KTI)"
                                deskripsi="LKTI (Lomba Karya Tulis Ilmiah) adalah ajang kompetisi penelitian ilmiah baik
                            berupa karya tulis maupun temuan (invention) yang berisi ide atau gagasan kreatif
                            yang dikembangkan menurut ketentuan pola pikir ilmiah dan mengacu pada
                            informasi yang reliable, permasalahan beserta pemecahannya."
                                route="{{ route('download', ['lomba' => 'kti']) }}" />
                        </div>
                        <div
                            class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12 mt-xxl-5 mt-xl-5 mt-lg-4 mt-md-4 mt-4">
                            <x-card.lomba title="POSTER"
                                deskripsi="Lomba poster merupakan suatu wadah untuk mengembangkan kreatifitas dan
                            memberikan informasi yang menarik bagi khalayak ramai.Lomba poster ini
                            mengangkat tema “Memajukan Perekonomian Bersama Generasi Penerus
                            Bangsa”"
                                route="{{ route('download', ['lomba' => 'poster']) }}" />
                        </div>
                        <div
                            class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12 mt-xxl-5 mt-xl-5 mt-lg-4 mt-md-4 mt-4">
                            <x-card.lomba title="I-TALK (IHSAO TALK)"
                                deskripsi="Lomba I-Talk merupakan lomba individu berbentuk video peserta yang menyatakan pendapat
                            disertai fakta yang ada dengan tema yakni   Mewujudkan Generasi Emas Indonesia yang Sadar Pajak dan Dampak Revolusi Industri Terhadap Akuntan Publik"
                                route="{{ route('download', ['lomba' => 'i-talk']) }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-timeline" id="timeline">
            <div class="container">
                <div class="header d-flex align-items-center justify-content-center flex-column text-center">
                    <h5>TIMELINE</h5>
                    <h1>IHSAO 2024</h1>
                </div>
                <div class="body d-flex justify-content-center align-items-center flex-column">
                    <ul class="timeline">
                        <li class="timeline-item mb-5">
                            <x-card.timeline title="Pendaftaran Lomba" tanggal="24 Nov 2023 - 24 Jan 2024" />
                        </li>
                        <li class="timeline-item mb-5">
                            <x-card.timeline
                                title="Pengiriman karya untuk lomba 
                            I-Talk, LKTI, Poster"
                                tanggal="24 Jan 2024" />
                        </li>
                        <li class="timeline-item mb-5">
                            <x-card.timeline title="Pendaftaran ulang peserta lomba dan pengumuman karya"
                                tanggal="25 Jan 2024" />
                        </li>
                        <li class="timeline-item mb-5">
                            <x-card.timeline title="Pengiriman file presentasi LKTI & Poster, Technical meeting 1"
                                tanggal="26 Jan 2024" />
                        </li>
                        <li class="timeline-item mb-5">
                            <x-card.timeline title="Day 1 IHSAO 2024 - Presentasi karya" tanggal="27 Jan 2024" />
                        </li>
                        <li class="timeline-item mb-5">
                            <x-card.timeline title="Pendaftaran ulang Final Olimpiade" tanggal="27 -30 Januari 2024" />
                        </li>
                        <li class="timeline-item mb-5">
                            <x-card.timeline title="Technical meeting 2" tanggal="2 Feb 2024" />
                        </li>
                        <li class="timeline-item mb-5">
                            <x-card.timeline title="Day 2 IHSAO 2024 - Pengumuman Juara" tanggal="3 Feb 2024" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="gallery" id="gallery">
            <div class="container">
                <div class="header d-flex align-items-center justify-content-center flex-column text-center">
                    <h5>GALLERY</h5>
                    <h1>IHSAO 2024</h1>
                </div>
                <div class="body d-flex justify-content-center align-items-center flex-column">
                    <div class="body">
                        <div class="row">
                            <div
                                class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <x-card.galleryFoto gambar="olimpiade.jpg" title="Lomba Olimpiade"/>
                            </div>
                            <div
                                class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-xxl-0 mt-xl-0 mt-lg-0 mt-3">
                                <x-card.galleryFoto gambar="penyerahan-hadiah.jpg" title="Penyerahan Hadiah"/>
                            </div>
                            <div
                                class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12  col-12 mt-xxl-0 mt-xl-0 mt-lg-0 mt-3">
                                <x-card.galleryFoto gambar="peserta.jpg" title="Peserta"/>
                            </div>
                            <div
                                class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-xxl-5 mt-xl-4 mt-lg-3 mt-3">
                                <x-card.galleryFoto gambar="ice-breaking.jpg" title="ICE BREAKING"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer" id="kontak">
            <div class="container-xxl container-xl container-lg container-fluid-sm container-fluid">
                <div class="row">
                    <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-3 col-sm-4 col-4 d-flex align-items-center">
                        <div class="logo">
                            <img src="{{ asset('assets/img/default/maskot-footer.png') }}" alt="Logo" width="84"
                                height="104" class="d-inline-block align-text-top">
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-9 col-sm-8 col-8">
                        <div class="row">
                            <div class="col-12">
                                <p> 
                                    <b>
                                        {{ config('app.name') }}
                                    </b> merupakan ajang adu ketangkasan
                                    intelektual dalam ilmu akuntansi bagi pelajar SMA dan SMK Tingkat Nasional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-12">
                                <h3>Hubungi Kami</h3>
                            </div>
                            <div class="col-12">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Wa</td>
                                            <td>:</td>
                                            <td>
                                                <a href="https://wa.me/081370317496">
                                                    0813-7031-7496 (Rendi)
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wa</td>
                                            <td>:</td>
                                            <td>
                                                <a href="https://wa.me/082292002201">
                                                    0822-9200-2201 (Yurike)
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wa</td>
                                            <td>:</td>
                                            <td>
                                                <a href="https://wa.me/085271573929">
                                                    0852-7157-3929 (Jihad)
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-12">
                                <h3>Sosial Media</h3>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-2">
                                        <a target="_blank" href="{{ route('instagram') }}" class="media-sosial">
                                            <img src="{{ asset('assets/img/icon/instagram.svg') }}" width="66"
                                                height="67" alt="Icon Instagram">
                                        </a>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-2">
                                        <a target="_blank" href="{{ route('tiktok') }}" class="media-sosial">
                                            <img src="{{ asset('assets/img/icon/tiktok.svg') }}" width="66"
                                                height="67" alt="Icon Tiktok">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
@endsection

@section('script')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navbar = document.querySelector('.navbar');
            var box = document.querySelector('.box-animation');
            var circle = document.querySelector('.circle-animation');
            var lastScrollPosition = window.scrollY;
            var noActiveClass = document.querySelector('.nav-link');

            var section = document.getElementById('beranda');
            if (section == 'beranda') {
                window.scrollTo({
                    top: -100,
                    behavior: 'smooth'
                });
            }

            var links = document.querySelectorAll('.navbar a');

            // Attach click event listener to each navigation link
            links.forEach(function(link) {
                link.addEventListener('click', function() {
                    // Remove 'active' class from all links
                    links.forEach(function(link) {
                        link.classList.remove('active');
                    });

                    // Add 'active' class to the clicked link
                    link.classList.add('active');
                });
            });

            window.addEventListener('scroll', function() {
                var currentScrollPosition = window.scrollY;
                if (currentScrollPosition > 0) {
                    navbar.classList.remove('bg-light');
                    navbar.classList.add('glass-effect');
                    box.classList.add('object-animation');
                    circle.classList.add('object-animation');
                } else {
                    navbar.classList.remove('glass-effect');
                    navbar.classList.add('bg-light');
                    box.classList.remove('object-animation');
                    circle.classList.remove('object-animation');
                }
                lastScrollPosition = currentScrollPosition;
            });
        });
    </script>
@endsection
