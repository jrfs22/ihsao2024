@extends('_partials.default_admin')
@section('title', 'Tambah Soal')
@section('content')
    <div class="content">
        <div class="card-body px-0 pb-2">
            <div class="container-fluid">
                <form action="{{ route('admin-store-soal') }}" method="POST" class="dropzone" enctype="multipart/form-data">
                    @csrf
                    <div class="top">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <select class="form-select" name="cabanglomba" id="cabanglomba" required
                                    onclick="handleSelectChange()">
                                    <option value="" selected>Pilih cabang lomba disini</option>
                                    @foreach ($cabang_lomba as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select" name="babak" id="babak" required>
                                    <option value="" selected>Pilih babak disini</option>
                                    <option value="pemanasan">Pemanasan</option>
                                    <option value="penyisihan">Penyisihan</option>
                                    <option value="final">Final</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select" name="tipesoal" id="tipesoal"
                                    onclick="handleSelectTipeSoal()">
                                    <option value="" selected>Pilih tipe soal</option>
                                    <option value="ganda">Pilihan ganda</option>
                                    <option value="gambar">Soal gambar</option>
                                </select>
                            </div>
                            <div class="col-12 mt-2">
                                <input type="text" name="pertanyaan" placeholder="Pertanyaan"
                                    class="form-control input-soal">
                            </div>
                        </div>
                    </div>
                    <div class="body mt-3">
                        <div id="pilihan-ganda">
                            <div class="input-gambar" id="gambar" style="display: none;">
                                <input type="file" id="inputGambarSoal" class="visually-hidden" name="gambar">
                                <label for="inputGambarSoal">
                                    <span></span>
                                </label>
                            </div>
                            <div class="col-12 mt-2" id="pernyataan" style="display: none;">
                                <input type="text" name="pernyataan" placeholder="Pernyataan"
                                    class="form-control input-soal">
                            </div>
                            <div id="pilihan-ganda">
                                <div class="mb-1 mt-3 pilihan">
                                    <input class="radio" id="pilihan-1" type="radio" name="options" value="0"
                                        required>
                                    <label for="pilihan-1">
                                        <input class="input-pilihan" name="pilihan[]" type="text" required>
                                    </label>
                                </div>
                                <div class="mb-1 pilihan">
                                    <input class="radio" id="pilihan-2" type="radio" name="options" value="1"
                                        required>
                                    <label for="pilihan-2">
                                        <input class="input-pilihan" name="pilihan[]" type="text" required>
                                    </label>
                                </div>
                                <div class="mb-1 pilihan">
                                    <input class="radio" id="pilihan-3" type="radio" name="options" value="2"
                                        required>
                                    <label for="pilihan-3">
                                        <input class="input-pilihan" name="pilihan[]" type="text" required>
                                    </label>
                                </div>
                                <div class="mb-1 pilihan">
                                    <input class="radio" id="pilihan-4" type="radio" name="options" value="3"
                                        required>
                                    <label for="pilihan-4">
                                        <input class="input-pilihan" name="pilihan[]" type="text" required>
                                    </label>
                                </div>
                                <div class="mb-1 pilihan">
                                    <input class="radio" id="pilihan-5" type="radio" name="options" value="4"
                                        required>
                                    <label for="pilihan-5">
                                        <input class="input-pilihan" name="pilihan[]" type="text" required>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="myob" style="display: none;">
                            <div class="mb-1 input-file">
                                <input type="file" id="inputSoal" name="file" class="visually-hidden">
                                <label for="inputSoal">
                                    <img src="{{ asset('assets/img/icon/upload.svg') }}" alt="Icon tambah File">
                                    <span>Upload File soal disini</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-3">
                    <div class="footer">
                        <button class="btn btn-info text-capitalize">
                            Simpan Soal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
