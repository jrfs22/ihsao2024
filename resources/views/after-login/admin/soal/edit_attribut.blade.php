@extends('_partials.default_admin')
@section('title', 'Ubah atribut soal')
@section('content')
    <div class="row">
        <div class="col-5">
            <div class="content akun-peserta">
                <form action="{{ route('admin-update-atribut', ['id' => $babak->id]) }}" method="POST" id="form-update-babak">
                    @csrf
                    @method('PUT')
                    <div class="card-body px-0 pb-2">
                        <div class="row body">
                            <div class="col-12">
                                <label for="cabang_lomba">Cabang Lomba</label>
                                <input class="d-block custom-input form-control" disabled type="text" name="cabang_lomba"
                                    id="cabang_lomba" required value="{{ $babak->cabangLomba->nama }}">
                            </div>
                            <div class="col-12">
                                <label for="babak">Babak lomba</label>
                                <input class="d-block custom-input form-control" disabled type="text" name="babak"
                                    id="babak" required value="{{ $babak->nama_babak }}">
                            </div>
                            <div class="col-12">
                                <label for="waktu_mulai">Waktu mulai</label>
                                <input class="d-block custom-input form-control" type="datetime-local" name="waktu_mulai"
                                    id="waktu_mulai" value="{{ $babak->waktu_mulai }}">
                            </div>
                            <div class="col-12">
                                <label for="lama_pengerjaan">Lama pengerjaan</label>
                                <input class="d-block custom-input form-control" type="time" name="lama_pengerjaan"
                                    id="lama_pengerjaan" required value="{{ $babak->lama_pengerjaan }}">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <button type="submit" class="btn btn-success text-capitalize d-block w-100">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        const validDetik = 24
        const waktu_mulai = document.getElementById('waktu_mulai')
        const timeInput = document.getElementById('lama_pengerjaan');

        // Add an event listener for the 'input' event
        timeInput.addEventListener('input', function(event) {
            [jam, menit, detik] = timeInput.value.split(':');
            detik = validDetik
            return `${jam}:${menit}:${detik}`
        });

        waktu_mulai.addEventListener('input', function(event) {
            const [datePart, timePart] = waktu_mulai.value.split(" ");
            const [day, month, year] = datePart.split("/");
            const [hours, minutes, seconds] = timePart.split(":");
            const formattedDate = `${year}-${month}-${day}T${hours}:${minutes}:${validDetik}`;
            waktu_mulai.value = formattedDate
        })

    </script>
@endsection
