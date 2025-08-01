@props([
    'image' => '/img/default.png',
    'alt' => '',
    'label' => 'Einleitung: Betreuung mit Herz',
    'overlayClass' => 'bg-gradient-to-tr from-brand backdrop-blur-[2px]',
    'autoHeight' => false,
])

@php
    $sectionClasses = $autoHeight
        ? 'relative w-full overflow-hidden cp-1 pb-8 pt-14'
        : 'relative min-h-[60vh] flex overflow-hidden cp-1 pb-8';
@endphp

<section
    class="{{ $sectionClasses }}"
    role="region"
    aria-label="{{ $label }}"
>
    {{-- Semantisches Hintergrundbild --}}
    <figure class="absolute inset-0 z-0" role="presentation">
        <img
            src="{{ $image }}"
            alt="{{ $alt }}"
            class="w-full h-full object-cover"
        />
    </figure>

    {{-- Overlay --}}
    <div class="absolute inset-0 {{ $overlayClass }} z-10" aria-hidden="true"></div>

    {{-- Inhalt --}}
    <div class="relative z-20 w-full max-w-7xl mx-auto px-4 pt-10 md:px-8">
        {{ $slot }}
    </div>
</section>
