@extends('_partials.default_admin')
@section('title', 'Hasil Test')
@section('content')
    <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col-12">
                    <div class="content hasil-test">
                        <div class="card-header d-flex gap-2 align-items-center px-3">
                            <h5>Detail</h5>
                            <button class="btn btn-info text-capitalize">MYOB-PENYISIHAN</button>
                        </div>
                        <hr>
                        <div class="card-body px-0 pb-2 px-3">
                            <div class="row body">
                                <div class="col-12">
                                    Nama : <span>raihan</span>
                                </div>
                                <div class="col-12">
                                    Email : <span>raihan23@gmail.com</span>
                                </div>
                                <div class="col-12">
                                    Asal Sekolah : <span>SMAN 5 Bekasi</span>
                                </div>
                                <div class="col-12">
                                    Poin : <span>117</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="content">
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Pertanyaan
                                    </th>
                                    <th>
                                        Jawaban
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4">1</td>
                                    <td class="px-4">Apa yang disebut oleh maling dan jelaskan?</td>
                                    <td class="px-4">a. orang yang nyuri</td>
                                </tr>
                                <tr>
                                    <td class="px-4">1</td>
                                    <td class="px-4">
                                        <a href="#" class="anchor-file pb-1">soal-myob-penyisihan.xlsx</a>
                                    </td>
                                    <td class="px-4">
                                        <div class="d-flex flex-column">
                                            <a href="#" class="anchor-file">jawaban-myob.myob</a>
                                            <a href="#" class="anchor-file">laporan-keuangan1.pdf</a>
                                            <a href="#" class="anchor-file">laporan-keuangan2.pdf</a>
                                            <a href="#" class="anchor-file">laporan-keuangan3.pdf</a>
                                            <a href="#" class="anchor-file">laporan-keuangan4.pdf</a>
                                            <a href="#" class="anchor-file pb-1">laporan-keuangan5.pdf</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
