@extends('_partials.nonavbar')
@section('title', 'Online Test')
@section('content')
    <section class="online-test">
        <nav class="navbar d-flex align-items-center justify-content-center ">
            <a class="navbar-brand d-flex align-items-center justify-content-center">
                Online Test
                <span class="btn btn-dark cursor-text ms-4 me-4">{{ $data->peserta->babak->cabangLomba->nama }} -
                    {{ $data->peserta->babak->nama_babak }}</span>
                IHSAO 2024
            </a>
        </nav>
        <div class="layouting h-100">
            <main>
                <div class="container">
                    <div class="soal">
                        <h3>Instruksi</h3>
                        <div class="line"></div>
                        <p>
                            Kamu memiliki waktu <b id="waktuSelesai">sad</b> untuk menyelesaikan tesnya
                        </p>
                        <div class="peraturan">
                            Peraturan
                            <ol>
                                <li>Kerjakan tepat waktu</li>
                                <li>Tidak Boleh berpindah dengan tab lain</li>
                                <li>Segala sesuatu akan di rekam oleh sistem</li>
                            </ol>
                        </div>
                    </div>
                    <div class="jawaban kode-akses">
                        <div id="container-countdown" class="countdown">
                            <span class="material-symbols-outlined">
                                timer
                            </span>
                            <span id="countdown">
                                0 hari, 0 jam, 0 detik, 0 detik
                            </span>
                        </div>
                        <a href="{{ route('peserta-start-test') }}" id="anchor-test" class="btn btn-success btn-kode"
                            style="display: none;">Masuk ke dalam test</a>
                    </div>
                </div>
            </main>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        const waktu_mulai = @json($data->peserta->babak->waktu_mulai)

        const lama_pengerjaan = @json($data->peserta->babak->lama_pengerjaan)

        console.log(lama_pengerjaan);

        // Hitung data
        [jam, menit, detik] = lama_pengerjaan.split(':').map(Number)

        // console.log(jam, menit, detik);
        const waktuSelesai = document.getElementById("waktuSelesai");
        if (detik === 0 && menit !== 0) {
            waktuSelesai.innerHTML = `${jam} Jam ${menit} menit`
        } else if (detik === 0 && menit === 0) {
            waktuSelesai.innerHTML = `${jam} Jam`
        } else {
            waktuSelesai.innerHTML = `${jam} Jam ${menit} menit ${detik} detik`
        }

        const targetTime = new Date(waktu_mulai).getTime();

        const interval = setInterval(updateCountdown, 1000);

        const countdown = document.getElementById("countdown");
        const containerCountdown = document.getElementById("container-countdown");
        const anchor = document.getElementById('anchor-test');

        function updateCountdown() {
            const currentTime = new Date().getTime();

            const timeDifference = targetTime - currentTime;

            if (timeDifference <= 0) {
                clearInterval(interval);
                anchor.style.display = 'block';
                containerCountdown.style.display = 'none';
            } else {
                const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                // Display the countdown
                document.getElementById("countdown").innerHTML = `
              ${days} hari, ${hours} jam, ${minutes} detik, ${seconds} detik`;
            }
        }
    </script>
@endsection
