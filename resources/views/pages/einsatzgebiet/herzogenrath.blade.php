@extends('layouts.app')

@section('title', 'Einsatzgebiet Herzogenrath – Seniorenbetreuung & Alltagshilfe vor Ort')
@section('description', 'Betreuungsdienst Ketteniß bietet persönliche und verlässliche Seniorenbetreuung in Herzogenrath – von Haushaltshilfe bis Begleitung zum Arzt. Regional, herzlich und individuell für Sie da.')
@section('keywords', 'Betreuungsdienst Ketteniß, Seniorenbetreuung Herzogenrath, Alltagshilfe Herzogenrath, Haushaltshilfe Herzogenrath, Betreuung vor Ort, Demenzhilfe Herzogenrath, regionale Seniorenhilfe')

@section('content')

    <x-navbar />
    {{-- Hero Section --}}
    <x-hero alt="Spaziergang durch Herzogenrath mit älterer Dame" :autoHeight="true" image="/img/banner-herzogenrath.webp">
        <div class="text-white p-6 md:p-10 max-w-[1200px] space-y-4">
            <x-headline type="h1" class="text-white">
                Persönlich. Herzlich. Vor Ort – <span class='highlight-dark'>Ihre Betreuung in Herzogenrath</span>
            </x-headline>
        </div>
    </x-hero>

    {{-- Intro --}}
    <x-section title="Verlässliche Unterstützung in Herzogenrath" class="py-20">
        <div class="grid md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-6 space-y-6">
                <p class="text-lg text-gray-700 leading-relaxed">
                    Ob Merkstein, Kohlscheid oder Mitte – wir sind für Sie in ganz Herzogenrath da. Unsere geschulten
                    Alltagsbegleiter:innen unterstützen Sie flexibel und zuverlässig – von der Haushaltshilfe bis zur
                    Begleitung zum Arzt.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Als regionaler Betreuungsdienst kennen wir die Wege, Menschen und Angebote in Ihrer Nähe – und können
                    individuell auf Ihre Situation eingehen.
                </p>
            </div>
            <div class="md:col-span-6">
                <figure class="overflow-hidden rounded-xl shadow-xl">
                    <img src="/img/betreuung-herzogenrath.webp" alt="Senior mit Betreuerin in Herzogenrath"
                        class="w-full h-full object-cover" loading="lazy" />
                </figure>
            </div>
        </div>
    </x-section>

    {{-- Vorteile --}}
    <x-section title="Was unsere Betreuung in Herzogenrath besonders macht" class="from-gray-50 bg-gradient-to-b py-20">
        <x-list.check :items="[
            'Feste Ansprechpartner: Jan Ketteniß & Nathalie Gerth',
            'Flexible Unterstützung im Alltag – individuell abgestimmt',
            'Erfahrung im Umgang mit Demenz & Pflegekasse §45a',
            'Kurze Wege, regionale Verankerung & persönliche Nähe',
        ]" />
    </x-section>

    {{-- CTA --}}
    <x-section class="bg-brand text-white py-24 cp-2">

        <x-cta headline="Beratung in Herzogenrath gewünscht?" button="Jetzt unverbindlich Kontakt aufnehmen">
            Sie haben Fragen zu unseren Leistungen in Herzogenrath oder möchten ein erstes Kennenlernen vereinbaren?
            Wir freuen uns auf Ihre Nachricht!
        </x-cta>
    </x-section>

@endsection
