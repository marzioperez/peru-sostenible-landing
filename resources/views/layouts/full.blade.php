<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        @vite('resources/js/app.js')
        @livewireStyles
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5KKB3LC2DW"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-5KKB3LC2DW');
        </script>
    </head>
    <body class="sm:overflow-hidden">
        <main>
            {{ $slot }}
        </main>
        @livewireScripts
        @stack('scripts')
    </body>
</html>
