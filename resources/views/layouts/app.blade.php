<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        @vite('resources/js/app.js')
        @livewireStyles
    </head>
    <body>
        <main>
            {{ $slot }}
        </main>
        @livewireScripts
        @stack('scripts')
    </body>
</html>
