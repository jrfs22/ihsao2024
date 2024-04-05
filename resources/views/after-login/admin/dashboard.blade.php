@extends('_partials.default_admin')
@section('title', 'Admin')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card summary">
                    <div class="card-header p-3 pt-2">
                        <div class="pt-1">
                            <p class="text-sm mb-0 text-capitalize">
                                Total Peserta
                            </p>
                            <div class="d-flex align-items-center">
                                <h4 class="mb-0">{{ $peserta_myob + $peserta_sma + $peserta_smk }}</h4>
                                <table class="ms-2">
                                    <tr>
                                        <td>
                                            <span></span>
                                            MYOB
                                        </td>
                                        <td class="ps-5 angka">{{ $peserta_myob }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span></span>
                                            Olimpiade SMA
                                        </td>
                                        <td class="ps-5 angka">{{ $peserta_sma }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span></span>
                                            Olimpiade SMK
                                        </td>
                                        <td class="ps-5 angka">{{ $peserta_smk }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card summary">
                    <div class="card-header p-3 pt-2">
                        <div class="pt-1">
                            <p class="text-sm mb-0 text-capitalize">
                                Total Soal MYOB
                            </p>
                            <div class="d-flex align-items-center">
                                <h4 class="mb-0">{{ $myob_pemanasan + $myob_penyisihan + $myob_final }}</h4>
                                <table class="ms-2">
                                    <tr>
                                        <td>
                                            <span></span>
                                            Pemanasan
                                        </td>
                                        <td class="ps-5 angka">{{ $myob_pemanasan }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span></span>
                                            Penyisihan
                                        </td>
                                        <td class="ps-5 angka">{{ $myob_penyisihan }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span></span>
                                            Final
                                        </td>
                                        <td class="ps-5 angka">{{ $myob_final }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card summary">
                    <div class="card-header p-3 pt-2">
                        <div class="pt-1">
                            <p class="text-sm mb-0 text-capitalize">
                                Total Soal Olimpiade SMA
                            </p>
                            <div class="d-flex align-items-center">
                                <h4 class="mb-0">{{ $sma_pemanasan + $sma_penyisihan + $sma_final }}</h4>
                                <table class="ms-2">
                                    <tr>
                                        <td>
                                            <span></span>
                                            Pemanasan
                                        </td>
                                        <td class="ps-5 angka">{{ $sma_pemanasan }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span></span>
                                            Penyisihan
                                        </td>
                                        <td class="ps-5 angka">{{ $sma_penyisihan }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span></span>
                                            Final
                                        </td>
                                        <td class="ps-5 angka">{{ $sma_final }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card summary">
                    <div class="card-header p-3 pt-2">
                        <div class="pt-1">
                            <p class="text-sm mb-0 text-capitalize">
                                Total Soal Olimpiade SMK
                            </p>
                            <div class="d-flex align-items-center">
                                <h4 class="mb-0">{{ $smk_pemanasan + $smk_penyisihan + $smk_final }}</h4>
                                <table class="ms-2">
                                    <tr>
                                        <td>
                                            <span></span>
                                            Pemanasan
                                        </td>
                                        <td class="ps-5 angka">{{ $smk_pemanasan }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span></span>
                                            Penyisihan
                                        </td>
                                        <td class="ps-5 angka">{{ $smk_penyisihan }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span></span>
                                            Final
                                        </td>
                                        <td class="ps-5 angka">{{ $smk_final }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="card-header table-card">
            <h4 class="mb-0">Daftar Peserta</h4>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th>
                                Username
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Jenis lomba
                            </th>
                            <th>
                                Nama tim
                            </th>
                            <th>
                                Asal sekolah
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($peserta->isNotEmpty())
                            @foreach ($peserta as $item)
                                <tr>
                                    <td class="px-4">{{ $item->users->email }}</td>
                                    <td class="px-4">{{ $item->users->nama_lengkap }}</td>
                                    <td class="px-4">{{ $item->cabang_lomba->nama }}</td>
                                    <td class="px-4">{{ $item->nama_tim }}</td>
                                    <td class="px-4">{{ $item->asal_sekolah }}</td>
                                </tr>
                            @endforeach

                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
