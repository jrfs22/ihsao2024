@extends('_partials.nonavbar')
@section('title', 'Online Test')
@section('content')
    {{-- {{ dd(session()->all()) }} --}}
    <section class="online-test">
        <nav class="navbar d-flex align-items-center justify-content-center ">
            <a class="navbar-brand d-flex align-items-center justify-content-center">
                Online Test
                <span
                    class="btn btn-dark cursor-text ms-4 me-4">{{ session('onlineTest')->peserta->babak->cabangLomba->nama }}
                    -
                    {{ session('onlineTest')->peserta->babak->nama_babak }}</span>
                IHSAO 2024
            </a>
        </nav>
        <form action="{{ route('upload-hasil-test') }}" method="POST">
        <div class="layouting h-100">
                <main>
                    @csrf
                    @php
                        $i = 1;
                        $optionsId = 1;
                    @endphp
                    @foreach ($soal as $item)
                        <div class="container mb-2">

                            <input type="hidden" value="{{ $item->id }}" name="soal_id[]">
                            <div class="soal">
                                <h3>Soal Nomor {{ $i++ }}</h3>
                                <div class="line"></div>
                                @if ($item->pernyataan !== null)
                                    <p>
                                        {{ $item->pernyataan }}
                                    </p>
                                    <img src="{{ asset('storage/gambar/soal-gambar/' . $item->gambar) }}"
                                        alt="Gambar soal {{ $item->pertanyaan }}">
                                @endif
                                <p>
                                    {{ $item->pertanyaan }}
                                </p>
                            </div>
                            <div class="jawaban">
                                @php
                                    $options = 'A';
                                @endphp
                                @foreach ($item->pilihanSemua as $item)
                                    {{-- {{ dd($item->id) }} --}}
                                    <div class="mb-1 pilihan">
                                        <input id="pilihan-{{ $loop->iteration }}" type="radio"
                                            name="options_{{ $optionsId }}"
                                            oninput="handleRadioInput({{ $optionsId }})" value="{{ $item->id }}">
                                        <label for="pilihan-{{ $loop->iteration }}">
                                            {{ $options++ }}.
                                            {{ $item->deskripsi }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="clear" id="clear-{{ $optionsId }}" style="display: none;">
                                <button type="button" onclick="clearRadioOptions({{ $optionsId }})">
                                    Hapus semua jawaban
                                </button>
                            </div>
                        </div>
                        @php
                            $optionsId++;
                        @endphp
                    @endforeach
                </main>

                <!-- Side Layout -->
                <aside>
                    <h4>Waktu tersisa</h4>
                    <div class="waktu">
                        <div class="row">
                            <div class="col-3 section">
                                <h2 id="jam">00</h2>
                                <p>Jam</p>
                            </div>
                            <div class="col-1 section">
                                :
                            </div>
                            <div class="col-3 section">
                                <h2 id="menit">00</h2>
                                <p>Menit</p>
                            </div>
                            <div class="col-1 section">
                                :
                            </div>
                            <div class="col-3 section">
                                <h2 id="detik">00</h2>
                                <p>Detik</p>
                            </div>
                        </div>
                    </div>
                    <h4>Submit</h4>
                    <div class="waktu d-flex justify-content-center">
                        <button class="btn btn-success" type="submit">Submit jawaban</button>
                    </div>
                </aside>
            </div>
        </form>
    </section>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var fullscreenButton = document.getElementById('fullscreenButton');

            if (document.documentElement.requestFullscreen) {
                fullscreenButton.addEventListener('click', function() {
                    document.documentElement.requestFullscreen()
                        .then(() => {
                            console.log('Fullscreen mode activated');
                        })
                        .catch((error) => {
                            console.error('Error entering fullscreen mode:', error);
                        });
                });
            } else {
                console.error('Fullscreen API is not supported in this browser.');
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.altKey || e.ctrlKey || e.shiftKey || e.key === "Tab" || e.key === "Escape" || e
                .key === "F5" || (e.ctrlKey && e.key === "r") || (event.ctrlKey && event.key === 'Tab')) {
                e.preventDefault();
            }
        });


        // Call handleRadioInput and toggleClearButtonVisibility for each radio group


        @for ($i = 1; $i < $optionsId; $i++)
            handleRadioInput({{ $i }});
            toggleClearButtonVisibility({{ $i }});
        @endfor

        function clearRadioOptions(targetId) {
            var radioButtons = document.querySelectorAll('[name="options_' + targetId + '"]');
            radioButtons.forEach(function(radioButton) {
                radioButton.checked = false;
            });
            toggleClearButtonVisibility(targetId);
        }

        function handleRadioInput(targetId) {
            var radioButtons = document.querySelectorAll('[name="options_' + targetId + '"]');
            radioButtons.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    toggleClearButtonVisibility(targetId);
                });
            });
        }

        function toggleClearButtonVisibility(targetId) {
            var clearButton = document.querySelector("#clear-" + targetId);

            var anyRadioButtonSelected = Array.from(
                document.querySelectorAll('[name="options_' + targetId + '"]')
            ).some(function(radio) {
                return radio.checked;
            });

            clearButton.style.display = anyRadioButtonSelected ? "block" : "none";
        }

        function parseTime(time) {
            const [hours, minutes, seconds] = time.split(':').map(part => parseInt(part.trim(), 10));
            return (hours * 60 * 60 + minutes * 60 + seconds) * 1000;
        }

        function setTargetTime() {
            const targetTime = new Date();
            const storedTime = localStorage.getItem('targetTime');

            if (storedTime) {
                targetTime.setTime(parseInt(storedTime, 10));
            } else {
                const additionalTime = parseTime("02:30:00");
                targetTime.setTime(targetTime.getTime() + additionalTime);
                localStorage.setItem('targetTime', targetTime.getTime().toString());
            }

            return targetTime;
        }

        const targetTime = setTargetTime();

        const interval = setInterval(() => {
            const currentTime = new Date().getTime();
            const remainingTime = targetTime - currentTime;

            const jam = Math.floor(remainingTime / (1000 * 60 * 60));
            const menit = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
            const detik = Math.floor((remainingTime % (1000 * 60)) / 1000);

            const jamContainer = document.getElementById('jam');
            const menitContainer = document.getElementById('menit');
            const detikContainer = document.getElementById('detik');

            jamContainer.innerHTML = jam;
            menitContainer.innerHTML = menit;
            detikContainer.innerHTML = detik;

            if (remainingTime <= 0) {
                clearInterval(interval);
                alert('Waktu sudah habis');
                localStorage.removeItem('targetTime');
            }
        }, 1000);
    </script>
@endsection
