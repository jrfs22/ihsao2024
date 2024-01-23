@extends('_partials.nonavbar')
@section('title', 'Online Test')
@section('content')
    <section class="online-test">
        <nav class="navbar d-flex align-items-center justify-content-center ">
            <a class="navbar-brand d-flex align-items-center justify-content-center">
                Online Test
                <span class="btn btn-dark ms-4 me-4">IHSAO 2024</span>
                
            </a>
        </nav>
        <div class="layouting h-100">
            <main>
                <div class="container">
                    <div class="soal">
                        <h3>Akses Test</h3>
                        <div class="line"></div>
                        <p>
                          Masukan Kode akses test dibawah ini untuk memulai
                        </p>
                    </div>
                    <div class="jawaban kode-akses">
                      <form action="{{ route('kode-akses') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                          <label for="kode_akses">Kode akses</label>
                          <input type="text" class="form-control w-30" name="kode_akses" id="kode_akses" required>
                        </div>
                        <div class="mb-2">
                          <button type="submit" class="btn btn-success btn-kode">Masuk kedalam test</button>
                        </div>
                      </form>
                    </div>
                </div>
            </main>
        </div>
    </section>
@endsection