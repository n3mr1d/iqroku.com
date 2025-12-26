<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="white">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO Meta Tags -->
    <title>TPA Abu Dhabi - Islamic Qur'an Learning Center for Indonesian Children | {{ config('app.name') }}</title>
    <meta name="description"
        content="TPA Abu Dhabi is a weekly Qur'an learning center for Indonesian children in Abu Dhabi. We provide Islamic education using the Iqra method, character building, and community support. Join our nurturing Islamic environment today.">
    <meta name="keywords"
        content="TPA Abu Dhabi, Islamic education, Quran learning, Indonesian children Abu Dhabi, Iqra method, Islamic character building, Islamic school Abu Dhabi, Quran memorization, TPA Indonesia Abu Dhabi">
    <meta name="author" content="TPA Abu Dhabi">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="TPA Abu Dhabi - Islamic Qur'an Learning Center for Indonesian Children">
    <meta property="og:description"
        content="Weekly Qur'an learning center for Indonesian children in Abu Dhabi. Islamic education with Iqra method, character building, and community support.">
    <meta property="og:image" content="{{ asset('/source/IMG_2046.JPG') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="TPA Abu Dhabi">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="TPA Abu Dhabi - Islamic Qur'an Learning Center">
    <meta name="twitter:description"
        content="Weekly Qur'an learning center for Indonesian children in Abu Dhabi. Islamic education with Iqra method and character building.">
    <meta name="twitter:image" content="{{ asset('/source/IMG_2046.JPG') }}">



    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="{{ asset('source/icon/css/all.css') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <wireui:scripts />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen bg-white">
    <x-navbar />
    {{ $slot }}
    <x-footer />
    @fluxScripts
</body>

</html>
