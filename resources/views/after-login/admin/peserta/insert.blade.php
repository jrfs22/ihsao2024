@extends('_partials.default_admin')
@section('title', 'Insert Peserta')
@section('content')
    <div class="row">
        <div class="col-5">
            <div class="content akun-peserta">
                <form action="{{route('admin-store-peserta')}}" method="POST" id="form-edit-akun">
                    @csrf
                    <div class="card-body px-0 pb-2">
                        <div class="row body">
                            <div class="col-12">
                                <label for="nama_lengkap">Nama lengkap</label>
                                <input class="d-block custom-input form-control" type="text" name="nama_lengkap" id="nama_lengkap" required>
                            </div>
                            <div class="col-12">
                                <label for="email">Alamat email</label>
                                <input class="d-block custom-input form-control" type="email" name="email" id="email" required>
                            </div>
                            <div class="col-12">
                                <label for="asal_sekolah">Asal sekolah</label>
                                <input class="d-block custom-input form-control" type="asal_sekolah" name="asal_sekolah" id="asal_sekolah" required>
                            </div>
                            <div class="col-12">
                                <label for="lomba">Lomba yang diikuti</label>
                                <select class="form-control custom-input d-block" name="lomba" id="lomba" required>
                                  <option value="sma">Olimpiade SMA</option>
                                  <option value="smk">Olimpiade SMK</option>
                                  <option value="myob">MYOB</option>
                                </select>
                                {{-- <input class="d-block custom-input form-control" type="lomba" name="lomba" id="lomba" required> --}}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                      <button type="submit" class="btn btn-success text-capitalize d-block w-100">Buat Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
