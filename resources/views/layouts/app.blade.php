{{-- Documentation --}}
{{-- Dokumen ini untuk mendefinisikan layout dari landing page yang memuat :
1. Header
2. Main
3. Footer
Main dimuat dinamis, sehingga bisa diisi dengan konten yang berbeda-beda sesuai dengan kebutuhan. --}}
{{-- End Documentation --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ADN Aliansi Dosen Nahada</title>
    <link rel="icon" href="{{ asset('adn-hd.png') }}" type="image/png">

    <!-- Styles / Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('components.landing.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @stack('scripts')

</body>
</html>