<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="white">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title ?? 'Home' }} - {{ config('app.name') }}</title>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- AOS JS -->

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init({
                duration: 800,
                easing: 'ease-out-cubic',
                once: true
            });
        });
    </script>
    <flux:main>
        {{ $slot }}
    </flux:main>
    @fluxScripts
</body>

</html>
