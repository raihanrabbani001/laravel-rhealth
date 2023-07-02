<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    {{ $modal ?? '' }}
    <nav class="sidebar">
        <div class="brand-container">
            <img class="w-auto h-32" src="{{ asset('images/rhealth-logo.png') }}" alt="Logo">
        </div>
        <a class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'keluhans') ? ' active' : '' }}" href="{{ route('keluhans.index') }}">Data Keluhan</a>
        <a class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'pelanggans') ? ' active' : '' }}" href="{{ route('pelanggans.index') }}">Data Pelanggan</a>
        <a class="nav-item {{ Str::startsWith(Route::currentRouteName(), 'obats') ? ' active' : '' }}" href="{{ route('obats.index') }}">Data Obat</a>
    </nav>
    <div class="content-container">
        <div class="px-5">
            <div class="animate__animated animate__fadeInUp animate__faster">
                <div class="content-header">
                    {{ $title }}
                </div>
                <div class="content-navigation flex items-center">
                    {{ $contentNavigation }}
                </div>
                <div class="content">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</body>

</html>