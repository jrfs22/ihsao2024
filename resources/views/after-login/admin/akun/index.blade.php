@extends('_partials.default_admin')
@section('title', 'Akun')
@section('content')
    <div class="row">
        <div class="col-4">
            <div class="content akun-peserta">
                <div class="card-header">
                    <div class="img-responsive">
                        <img src="{{ asset('assets/img/icon/Photo.svg') }}" alt="Foto peserta">
                    </div>
                </div>
                <hr>
                <div class="card-body px-0 pb-2">
                    <div class="row body">
                        <div class="col-12">
                            Nama : <span>{{ auth()->user()->nama_lengkap }}</span>
                        </div>
                        <div class="col-12">
                            Email : <span>{{ auth()->user()->email }}</span>
                        </div>
                        <div class="col-12">
                            Password : <span>{{ parseToStars(auth()->user()->password_rand) }}</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin-edit-akun') }}" class="btn btn-info text-capitalize d-block w-100">Ubah profil</a>
                </div>
            </div>
        </div>
    </div>
@endsection
