<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rhealth Client</title>
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="bg-primaryContainer h-screen">
        <div class="px-5">
            <div class="animate__animated animate__fadeInUp animate__faster">
                <div class="flex items-top justify-center">
                    <img class="w-auto h-32" src="{{ asset('images/rhealth-logo.png') }}" alt="Logo">
                </div>
                <div class="flex-col">
                    <div class="text-white mt-2 font-semibold py-1 px-2 rounded-lg text-sm text-center">Selamat datang {{ $pelanggan->nama_lengkap }} di Aplikasi Rhealth Client</div>
                    @foreach($keluhans as $keluhan)
                    <div class="text-white mt-2 bg-secondaryContainer py-4 px-5 rounded-lg grid grid-cols-2">
                        <div>
                            <div class="font-semibold">Keluhan</div>
                            <div class="text-sm py-2">{{ $keluhan->keluhan }}</div>
                        </div>
                        <div class="flex items-center justify-between ms-2">
                            <div>
                                <div class="font-semibold">Tanggal</div>
                                <div class="text-sm py-2">{{ $keluhan->created_at }}</div>
                            </div>
                            <div>
                                <a href="{{ route('clients.show', $keluhan->id) }}" class="primary-button">Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>