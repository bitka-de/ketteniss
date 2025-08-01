@props([
    'type' => 'h1',
    'text' => null,
])

@php
    $tag = in_array($type, ['h1','h2','h3','h4','h5','h6']) ? $type : 'h1';
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => 'headline ' . $tag]) }}>
    {{ $text ?? $slot }}
</{{ $tag }}>
