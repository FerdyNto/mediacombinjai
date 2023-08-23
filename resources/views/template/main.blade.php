<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('css/fontawesome.all.min.css') }}">

    {{-- Font CSS --}}
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    {{-- Eksternal CSS --}}
    <link rel="stylesheet" href="{{ asset('css/public.css') }}">

    {{-- Icon --}}
    <link rel="shortcut icon" href="{{ asset('img/img logo/LOGO MEDIACOM.ico') }}">
    <title>Media Com | {{ $title }}</title>
</head>

<body>
    {{-- Header --}}
    <x-public.navbar />
    {{-- Akhir Header --}}

    @yield('content-public')

    {{-- Footer --}}
    <x-public.footer />
    {{-- Akhir Footer --}}


    {{-- Bootstrap --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    {{-- Fontawesome --}}
    <script src="{{ asset('js/fontawesome.all.min.js') }}"></script>
</body>

</html>
