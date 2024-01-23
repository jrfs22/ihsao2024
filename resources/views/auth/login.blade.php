@extends('_partials.nonavbar')
@section('title', 'Home')
@section('content')
    <section class="homepage auth" id="beranda">
        <div class="jumbotron bg-body-tertiary d-flex align-item-start justify-content-center flex-column">
            <div class="container">
                <span class="box-animation">
                    <img src="{{ asset('assets/img/shape/box.webp') }}" alt="" height="109" width="109">
                </span>
                <div class="row">
                    <div class="col-xx-5 col-xl-5 col-lg-5 col-md-7 col-10">
                        <h1 class="login" data-aos="fade-right" data-aos-duration="1000">
                            Masuk
                        </h1>
                        <div class="login-form" data-aos="fade-right" data-aos-duration="1000">
                            <form action="{{ route('loginPost') }}" class="form-control" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="test@gmail.com" required>
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password" required>
                                </div>
                                <button class="w-100 mt-2" type="submit">Masuk</button>
                            </form>
                        </div>
                    </div>
                    {{-- <div class="col-md-1"></div> --}}
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-5 col-5">
                        <div class="container d-flex justify-content-end maskot" data-aos="fade-left">
                            <img src="{{ asset('assets/img/default/maskot.webp') }}" width="326" height="326"
                                alt="Maskot {{ config('app.name') }}" class="ms-5">
                        </div>
                    </div>
                </div>
                <span class="circle-animation">
                    <img src="{{ asset('assets/img/shape/circle.webp') }}" width="80" height="80" alt="">
                </span>
            </div>
        </div>
    </section>
@endsection
