@props([
    'title' => null,
    'class' => '',
])

<section class="{{ $class }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($title)
            <x-headline type="h2" class="mb-8">{{ $title }}</x-headline>
        @endif

        {{ $slot }}
    </div>
</section>
