<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/3c5402bde5.js" crossorigin="anonymous"></script>
        <title>{{config('app.name')}}</title>
        @vite('resources/js/app.js')
        @livewireStyles
    </head>
    <body>
        @php
            $header_relative = false;
            if (isset($header_fixed)) {
                $header_relative = !$header_fixed;
            }
        @endphp
        @include('layouts.header', ['header_relative' => $header_relative])
        <main>
            {{ $slot }}
        </main>
        @include('layouts.modals')
        @include('layouts.footer')
        @livewireScripts
        @stack('scripts')
    </body>
</html>
