<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') CitrusPlay</title>
        <!-- core CSS -->
        <link rel="shortcut icon" href="http://citrusplay/img/CitrusPlay.png">
        

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        {{-- ESTILOS --}}
        {{-- SE CAMBIA POR ASSET EN PRODUCCION, EN LUGAR DE MIX --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased" style="background: #000">
        <x-jet-banner />

        <div class="min-h-screen">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <main >
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

            @isset($js)
                {{ $js }}
            @endisset
    </body>
</html>
