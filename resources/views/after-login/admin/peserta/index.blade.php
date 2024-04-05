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
