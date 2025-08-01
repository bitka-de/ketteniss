@props([
    'type' => 'button',
    'href' => null,
    'route' => null,
    'variant' => 'primary', // primary, secondary, ghost, danger ...
    'target' => null,
    'rel' => null,
    'disabled' => false,
])

@php
    use Illuminate\Support\Facades\Route;

    // Ziel ermitteln, falls Link
    $url = $href ?? ($route && Route::has($route) ? route($route) : null);

    // Tailwind-Varianten
    $variants = [
        'primary' => 'bg-brand text-white hover:bg-brand-dark',
        'secondary' => 'bg-gray-200 text-gray-800 hover:bg-gray-300',
        'white' => 'bg-gray-200 text-gray-800 hover:bg-gray-300',
        'ghost' => 'bg-transparent text-blue-600 hover:underline',
        'danger' => 'bg-red-600 text-white hover:bg-red-700',
    ];

    $base = 'inline-flex items-center px-4 py-2 rounded-full text-sm font-medium transition duration-200 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-brand-light whitespace-nowrap';
    $classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']);

    $computedRel = $rel ?? ($target === '_blank' ? 'noopener noreferrer' : null);
@endphp

@if ($url)
    {{-- Als <a> Link --}}
    <a
        href="{{ $url }}"
        @if($target) target="{{ $target }}" @endif
        @if($computedRel) rel="{{ $computedRel }}" @endif
        {{ $attributes->merge(['class' => $classes]) }}
    >
        {{ $slot }}
    </a>
@else
    {{-- Als <button> --}}
    <button
        type="{{ $type }}"
        @if($disabled) disabled @endif
        {{ $attributes->merge(['class' => $classes]) }}
    >
        {{ $slot }}
    </button>
@endif
