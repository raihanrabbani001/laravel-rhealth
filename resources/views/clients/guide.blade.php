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
            <div class="text-white w-full mt-32 max-w-sm p-4 border rounded-lg shadow sm:p-6 md:p-8 bg-gray-800 border-gray-700">
                <h5 class="text-xl font-medium mb-5">Cara penggunaan Aplikasi</h5>
                <div class="flex">
                    <h6 class="me-2">1.</h6>
                    <h6 class="mb-2">Download aplikasi QR Code scanner di PlayStore maupun App Store</h6>
                </div>
                <div class="flex">
                    <h6 class="me-2">2.</h6>
                    <h6 class="mb-2">Scan QR Code yang diberikan oleh apoteker</h6>
                </div>
                <div class="flex">
                    <h6 class="me-2">3.</h6>
                    <h6 class="mb-2">Ikuti tautan tersebut yang telah di scan, nanti akan langsung terarahkan kedalam aplikasi Rhealth</h6>
                </div>
            </div>
        </div>
    </div>
</body>

</html>