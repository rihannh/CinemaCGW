<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Icon CGW --}}
    <link rel="icon" href="{{ asset('images/CGW_final.svg') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite('resources/css/app.css')
    @vite('resources/js/script.js')
</head>

<body class="bg-dark">
    @include('layouts.home.navbar-auth')

    <main>
        @yield('content')
    </main>

    @include('layouts.home.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/datepicker.min.js"></script>
</body>

</html>
