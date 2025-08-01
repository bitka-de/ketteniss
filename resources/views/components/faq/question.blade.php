@props(['question'])

<details class="group border-b border-gray-200 py-4">
    <summary class="flex items-center justify-between cursor-pointer text-lg font-semibold text-brand">
        <span>{{ $question }}</span>
        <svg class="ml-2 size-5 transition-transform duration-300 group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </summary>
    <div class="mt-2 text-gray-700 text-base leading-relaxed">
        {{ $slot }}
    </div>
</details>
