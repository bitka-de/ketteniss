@props([
    'headline' => 'Nicht sicher, was Sie brauchen?',
    'text' => 'Lassen Sie uns gemeinsam herausfinden, wie wir Ihnen oder Ihren Liebsten am besten helfen können. Ein Gespräch ist der erste Schritt.',
    'buttonText' => 'Jetzt unverbindlich beraten lassen',
    'buttonHref' => '/kontakt',
    'variant' => 'white'
])

<div class="max-w-3xl text-center mx-auto space-y-6">
    <x-headline type="h2" class="text-white">
        {{ $headline }}
    </x-headline>

    <p class="text-balance text-white/90">
        {{ $text }}
    </p>

    <x-button :href="$buttonHref" :variant="$variant">
        {{ $buttonText }}
    </x-button>
</div>