
@props(['title' => 'Ein starkes Team', 'text' => 'Alle Mitarbeiter:innen sind mit Herz dabei. Regelmäßig geschult, zuverlässig und engagiert.'])

<div class="flex flex-col justify-center items-center text-brand hover:text-accent-dark">
    {{ $slot }}
    <h3 class="text-lg font-semibold">{{ $title }}</h3>
    <p class="text-gray-600 text-sm mt-2">{{ $text }}</p>
</div>