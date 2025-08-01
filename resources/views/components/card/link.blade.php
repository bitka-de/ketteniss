@props([
    'href',
    'title',
    'description',
    'ariaLabel' => null,
])

<a 
    href="{{ $href }}" 
    class="group block bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-md hover:border-brand transition focus:outline-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-brand"
    role="link"
    @if($ariaLabel) aria-label="{{ $ariaLabel }}" @endif
>
    <div class="flex flex-col h-full gap-3">
        <h3 class="text-xl font-semibold text-gray-900 group-hover:text-brand transition-colors">
            {{ $title }}
        </h3>
        <p class="text-sm text-gray-600 leading-relaxed">
            {{ $description }}
        </p>
        <span class="mt-auto inline-flex items-center text-sm font-medium text-brand group-hover:underline">
            Mehr erfahren
            <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </span>
    </div>
</a>
