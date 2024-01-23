@extends('_partials.default_admin')
@section('title', 'Peserta')
@section('content')
  <div class="content">
    <div class="card-header table-card p-0 m-0">
      <div class="row mx-0">
        <div class="col-12 d-flex align-items-center justify-content-end">
          <a class="btn btn-info text-capitalize" href="{{ route('admin-insert-peserta') }}">Tambah akun peserta</a>
        </div>
      </div>
    </div>
    <div class="card-body px-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th>
                Email
              </th>
              <th>
                Password
              </th>
              <th>
                Nama
              </th>
              <th>
                Jenis lomba
              </th>
              <th>
                Asal sekolah
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($peserta as $user)
              <tr>
                <td class="px-4">{{ $user->email }}</td>
                <td class="px-4">{{ $user->password_rand }}</td>
                <td class="px-4">{{ $user->nama_lengkap }}</td>
                <td class="px-4">{{ $user->peserta->cabang_lomba->nama }}</td>
                <td class="px-4">{{ $user->peserta->asal_sekolah }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
