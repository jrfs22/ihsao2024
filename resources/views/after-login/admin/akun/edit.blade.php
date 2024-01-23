@extends('_partials.default_admin')
@section('title', 'Ubah Profile')
@section('content')
    <div class="row">
        <div class="col-4">
            <div class="content akun-peserta">
                <form action="{{ route('admin-update-akun') }}" method="POST" id="form-edit-akun">
                    @csrf
                    @method('PUT')
                    <div class="card-body px-0 pb-2">
                        <div class="row body">
                            <div class="col-12">
                                <label for="nama">Nama</label>
                                <input class="d-block custom-input form-control" type="text" name="nama"
                                    id="nama" value="{{ $akun->nama_lengkap }}" required>
                            </div>
                            <div class="col-12">
                                <label for="password_lama">Password Lama</label>
                                <input class="d-block custom-input form-control" type="password" name="password_lama"
                                    id="password_lama" required>
                            </div>
                            <div class="col-12">
                                <label for="password_baru">Password baru</label>
                                <input class="d-block custom-input form-control" type="password" name="password_baru"
                                    id="password_baru" required>
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
