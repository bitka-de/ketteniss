@props([
    'color' => 'default', // default | dark
    'pos' => 'center', // default | dark
])

@php
    $bg = $color === 'dark' ? 'bg-brand-light text-white' : 'bg-white text-gray-700';
     
@endphp

<div class="flex justify-{{$pos}} mb-4">
    <span class="inline-flex items-center gap-2 px-3 py-1 text-sm font-semibold uppercase tracking-wide rounded-full shadow-sm {{ $bg }}">
        <span class="w-2 h-2 bg-accent rounded-full"></span>
        {{ $slot }}
    </span>
</div>
