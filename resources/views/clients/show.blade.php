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
                    <div class="text-white mt-2 bg-secondaryContainer py-4 px-5 rounded-lg">
                        <div class="flex justify-between">
                            <div>
                                <div class="font-semibold">Penanggung Jawab</div>
                                <div class="text-sm py-2">{{ $keluhan->ttk->nama_lengkap }}</div>
                            </div>
                            <div>
                                <div class="font-semibold">Pada Tanggal</div>
                                <div class="text-sm py-2">{{ $keluhan->created_at }}</div>
                            </div>
                        </div>
                        <div class="border-t-2 border-gray-500">
                            <div class="mt-5">
                                <div class="font-semibold bg-primaryContainer py-1 px-2 rounded-lg inline-block">Keluhan</div>
                                <div class="px-2 rounded-lg text-sm">Lorem ipsum, dolor sit amet consectetur </div>
                            </div>
                            <div class="mt-3">
                                <div class="font-semibold bg-primaryContainer py-1 px-2 rounded-lg inline-block">Diagnosa</div>
                                <div class="px-2 rounded-lg text-sm">Lorem ipsum, dolor sit amet consectetur </div>
                            </div>
                            <div class="mt-3">
                                <div class="font-semibold bg-primaryContainer py-1 px-2 rounded-lg inline-block">Saran</div>
                                <div class="px-2 rounded-lg text-sm">Lorem ipsum, dolor sit amet consectetur </div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-1 py-2 font-semibold bg-primaryContainer px-2 rounded-lg text-center">List Obat</div>
                                <div class="px-2 rounded-lg text-sm">
                                    <table class="min-w-full text-left text-sm font-light px-5">
                                        <thead class="border-b border-primaryContainer font-medium">
                                            <tr>
                                                <th scope="col" class="pt-3 pb-2">Obat</th>
                                                <th scope="col" class="pt-3 pb-2">Dosis Penggunaan</th>
                                                <th scope="col" class="pt-3 pb-2">Efek Samping</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($informasiObats as $informasiObat)
                                            <tr class="transition duration-300 ease-in-out hover:bg-primaryContainer">
                                                <td class="py-2">{{ $informasiObat->obat->nama }} {{ $informasiObat->obat->dosis }}</td>
                                                <td class="py-2">{{ $informasiObat->dosis_penggunaan }}</td>
                                                <td class="py-2">{{ $informasiObat->obat->efek_samping }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>