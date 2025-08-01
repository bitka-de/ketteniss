@props([
    'href' => null,
    'route' => null,
    'url' => null,
    'label' => null,
    'title' => null,
    'target' => null,
    'rel' => null,
    'activeClass' => 'underline',
    'exact' => true,
])

@php
    // Ziel-URL ermitteln
    $destination = $route
        ? route($route)
        : ($url
            ? url($url)
            : ($href ?? '/'));

    // Für aktiven Zustand: nur Pfadteil extrahieren
    $path = parse_url($destination, PHP_URL_PATH);

    // Aktiver Link (Pfad-Check)
    $isActive = $exact
        ? request()->fullUrlIs($destination)
        : request()->is(ltrim($path, '/').'*'); // Pfadvergleich mit Wildcard

    // rel-Attribut nur bei target="_blank"
    $computedRel = $rel ?? ($target === '_blank' ? 'noopener noreferrer' : null);

    // Standard-Tailwind-Klassen
    $baseClasses = 'text-inherit no-underline hover:underline focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-brand';

    // Active-Class hinzufügen
    $finalClass = $isActive ? "$baseClasses $activeClass" : $baseClasses;
@endphp

<a
    href="{{ $destination }}"
    @if($label) aria-label="{{ $label }}" @endif
    @if($title) title="{{ $title }}" @endif
    @if($target) target="{{ $target }}" @endif
    @if($computedRel) rel="{{ $computedRel }}" @endif
    {{ $attributes->merge(['class' => $finalClass]) }}
>
    {{ $slot }}
</a>
