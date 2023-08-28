<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/3c5402bde5.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" href="{{asset('img/favicom/iso_24x24.png')}}" sizes="24x24" />
        <link rel="icon" type="image/png" href="{{asset('img/favicom/iso_32x32.png')}}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{asset('img/favicom/iso_57x57.png')}}" sizes="57x57" />
        <link rel="icon" type="image/png" href="{{asset('img/favicom/iso_72x72.png')}}" sizes="72x72" />
        <link rel="icon" type="image/png" href="{{asset('img/favicom/iso_96x96.png')}}" sizes="96x96" />
        <link rel="icon" type="image/png" href="{{asset('img/favicom/iso_114x114.png')}}" sizes="114x114" />
        <link rel="icon" type="image/png" href="{{asset('img/favicom/iso_128x128.png')}}" sizes="128x128" />
        <link rel="icon" type="image/png" href="{{asset('img/favicom/iso_180x180.png')}}" sizes="180x180" />
        <link rel="icon" type="image/png" href="{{asset('img/favicom/iso_192x192.png')}}" sizes="192x192" />
        <link rel="apple-touch-icon" href="https://perusostenible.org/wp-content/uploads/2022/01/perusosteniblefavicon.png" />
        <meta name="msapplication-TileImage" content="https://perusostenible.org/wp-content/uploads/2022/01/perusosteniblefavicon.png" />
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
