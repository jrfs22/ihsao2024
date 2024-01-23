<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- OG --}}
    <meta name="og:site_name" content="{{ config('app.url') }}">
    <meta name="og:title" content="{{ config('app.name') }} | @yield('title')">
    <meta name="og:image" content="{{ asset('og-maskot-min.png') }}">
    <meta name="og:description" content="{{ config('app.description') }}">

    {{-- Browser --}}
    <meta name="title" content="{{ config('app.name') }} | @yield('title')">
    <meta name="description" content="{{ config('app.description') }}">
    <meta name="keywords" content="laundry">
    <meta name="author" content="{{ config('app.url') }}">
    <title>{{ config('app.name') }} | @yield('title')</title>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
