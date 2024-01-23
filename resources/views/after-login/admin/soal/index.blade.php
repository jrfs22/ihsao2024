@extends('_partials.default_admin')
@section('title', 'Peserta')
@section('content')
    <div class="content">
        <div class="card-header table-card p-0 m-0">
            <div class="row mx-0">
                <div class="col-12 d-flex align-items-center justify-content-end">
                    <a class="btn btn-info text-capitalize" href="{{ route('admin-insert-soal') }}">Tambah Soal</a>
                </div>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th>
                                No Soal
                            </th>
                            <th>
                                Soal
                            </th>
                            <th>
                                Jawaban
                            </th>
                            <th>
                                Cabang Lomba
                            </th>
                            <th>
                                Babak Lomba
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($soal_olimpiade as $soal)
                            <tr>
                                <td class="px-4">{{ $i++ }}</td>
                                <td class="px-4">{{ $soal->pertanyaan }}</td>
                                <td class="px-4">{{ $soal->pilihan->deskripsi }}</td>
                                <td class="px-4">{{ $soal->cabangLomba->nama }}</td>
                                <td class="px-4">{{ $soal->babak->nama_babak }}</td>
                                {{-- <td class="px-4">{{ $soal->waktu }}</td> --}}
                            </tr>
                        @endforeach
                        @foreach ($soal_myob as $item)
                            <tr>
                                <td class="px-4">{{ $i++ }}</td>
                                <td class="px-4" colspan="1">{{ $item->pertanyaan }}</td>
                                <td></td>
                                <td class="px-4">{{ $item->cabangLomba->nama }}</td>
                                <td class="px-4">{{ $item->babak->nama_babak }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="card-header table-card">
            <h4 class="mb-0">Waktu Kompetisi</h4>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th>
                                Cabang Lomba
                            </th>
                            <th>
                                Babak Lomba
                            </th>
                            <th>
                                Waktu Pengerjaan
                            </th>
                            <th>
                                Kode Soal
                            </th>
                            <th>
                                Ubah
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cabangLomba as $item)
                            <tr>
                                <td class="px-4">{{ $item->cabangLomba->nama }}</td>
                                <td class="px-4">{{ $item->nama_babak }}</td>
                                <td class="px-4">{{ $item->lama_pengerjaan }}</td>
                                <td class="px-4">{{ $item->kode_soal }}</td>
                                <td class="px-4">
                                    <a href="{{ route('admin-ubah-atribut', ['id' => $item->id]) }}"
                                        class="btn btn-warning text-capitalize">Ubah</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
