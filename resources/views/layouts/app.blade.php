<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Betreuungsdienst Ketteniß - Aachen')</title>
    <meta name="description" content="@yield('description', 'Betreuungsdienst Aachen')">
    <meta name="keywords" content="@yield('keywords', 'Betreuungsdienst, Aachen')">
    <meta name="robots" content="noindex, nofollow">

    <meta property="og:title" content="{{ $title ?? '' }}" />
    <meta property="og:description" content="{{ $description ?? 'Willkommen' }}" />

    <link rel="apple-touch-icon" sizes="57x57" href="/img/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/icon/favicon-16x16.png">
    <link rel="manifest" href="/img/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    {{-- Favicon (optional) --}}
    <link rel="icon" href="/favicon.ico">
    {{-- Styles (Tailwind via Vite) --}}
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" media="all" href="/build/assets/app-CbUU5GT-.css">
</head>

<body>



    {{-- Main Content --}}
    <main class="min-h-screen">
        @yield('content')
    </main>


    <x-footer />

    {{-- Scripts (optional) --}}
    {{-- @vite('resources/js/app.js') --}}
    <script src="build/assets/app-DNxiirP_.js " defer></script>
</body>

</html>
