<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Betreuungsdienst Ketteniß - Aachen')</title>
    <meta name="description" content="@yield('description', 'Betreuungsdienst Aachen, professionelle Betreuung, Pflege, Senioren, Hilfe, Unterstützung')">
    <meta name="keywords" content="@yield('keywords', 'Betreuungsdienst, Aachen, Pflege, Senioren, Betreuung, Hilfe, Unterstützung')">
    <meta name="robots" content="@yield('robots', 'index, follow')">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', 'Betreuungsdienst Ketteniß - Aachen')" />
    <meta property="og:description" content="@yield('description', 'Betreuungsdienst Aachen, professionelle Betreuung, Pflege, Senioren, Hilfe, Unterstützung')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('img/og-image.jpg') }}" />

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title', 'Betreuungsdienst Ketteniß - Aachen')" />
    <meta name="twitter:description" content="@yield('description', 'Betreuungsdienst Aachen, professionelle Betreuung, Pflege, Senioren, Hilfe, Unterstützung')" />
    <meta name="twitter:image" content="{{ asset('img/og-image.jpg') }}" />

    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/img/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/icon/favicon-16x16.png">
    <link rel="manifest" href="/img/icon/manifest.json">
    <meta name="theme-color" content="#ffffff">

    {{-- Styles / Scripts: Vite oder Manifest --}}
    @env('local')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@else
    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $cssPath = $manifest['resources/css/app.css']['file'] ?? null;
        $jsPath = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp

    @if ($cssPath)
        <link rel="stylesheet" href="{{ asset('build/' . $cssPath) }}">
    @endif

    @if ($jsPath)
        <script type="module" src="{{ asset('build/' . $jsPath) }}"></script>
    @endif
    @endenv

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}" />
</head>

<body>

    {{-- Main Content --}}
    <main class="min-h-screen">
        @yield('content')
    </main>

    <x-footer />
</body>

</html>
