<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rhalth</title>
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex justify-center bg-secondaryContainer h-screen">
        <div class="animate__animated animate__fadeInUp animate__faster">
            <div class="w-full mt-32 max-w-sm p-4 border rounded-lg shadow sm:p-6 md:p-8 bg-gray-800 border-gray-700">
                <form class="space-y-6" method="POST" action="{{ route('verify.role') }}">
                    @csrf
                    <h5 class="text-xl font-medium text-white">Silahkan pilih role</h5>
                    <div>
                        <label for="token" class="block mb-2 text-sm font-medium text-white">Token</label>
                        <input type="text" name="token" placeholder="••••••••" class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" required>
                    </div>
                    <button type="submit" class="w-full primary-button">Masuk</button>
                    <div class="flex items-center text-white">
                        Atau masuk sebagai pelanggan:
                    </div>
                    <a href="{{ route('guides.index') }}" type="submit" class="w-full text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Masuk</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>