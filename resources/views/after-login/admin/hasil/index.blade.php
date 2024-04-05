@extends('_partials.default_admin')
@section('title', 'Peserta')
@section('content')
  <div class="content">
    <div class="card-body px-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th>
                Jenis Lomba
              </th>
              <th>
                Babak
              </th>
              <th>
                Email
              </th>
              <th>
                Asal Sekolah
              </th>
              <th>
                Poin
              </th>
              <th>
                Jumlah Pelanggaran
              </th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td class="px-4">MYOB</td>
                <td class="px-4">Babak</td>
                <td class="px-4">Email</td>
                <td class="px-4">Asal Sek</td>
                <td class="px-4">Poin</td>
                <td class="px-4">10 x</td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
