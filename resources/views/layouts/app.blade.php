<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
              integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
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
