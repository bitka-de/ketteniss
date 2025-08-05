@extends('layouts.app')

@section('title', 'Demenzbegleitung in Aachen – Einfühlsame Betreuung für Menschen mit Demenz')
@section('description', 'Individuelle Demenzbegleitung in Aachen: Unsere erfahrenen Betreuungskräfte unterstützen Menschen mit Demenz und entlasten Angehörige – mit Herz, Geduld und Struktur für mehr Lebensqualität.')
@section('keywords', 'Demenzbegleitung Aachen, Demenz Betreuung, Unterstützung Demenz, Seniorenbetreuung Aachen, Hilfe bei Demenz, Demenzhilfe Aachen, Betreuung Demenzkranke, Entlastung Angehörige Demenz')

@section('content')

    <x-navbar />
    {{-- Hero Section --}}
    <x-hero alt="Seniorin mit Demenz wird liebevoll begleitet" :autoHeight="true">
        <div class="text-white p-6 md:p-10 max-w-[1200px] space-y-4">
            <x-headline type="h1" class="text-white">
                Einfühlsam, geduldig und verlässlich – <span class='highlight-dark'>Demenzbegleitung mit Herz</span>
            </x-headline>
        </div>
    </x-hero>

    {{-- Einleitung --}}
    <x-section title="Verständnisvolle Begleitung für Menschen mit Demenz" class="py-20">
        <div class="grid md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-6 space-y-5">
                <p class="text-lg text-gray-700 leading-relaxed">
                    Der Alltag mit einer demenziellen Erkrankung bringt besondere Herausforderungen mit sich – für
                    Betroffene ebenso wie für Angehörige. Wir bieten individuelle Unterstützung, die auf Vertrauen, Empathie
                    und festen Strukturen basiert.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Unsere geschulten Mitarbeitenden begleiten Menschen mit Demenz sicher durch den Tag, fördern Ressourcen
                    und schaffen Momente der Orientierung und Geborgenheit.
                </p>
            </div>
            <div class="md:col-span-6">
                <figure class="overflow-hidden rounded-xl shadow-xl">
                    <img src="/img/leistungen/demenz-betreuung.webp" alt="Betreuungskraft mit Seniorin bei einer Aktivität"
                        class="w-full h-full object-cover" loading="lazy" />
                </figure>
            </div>
        </div>
    </x-section>

    {{-- Vorteile --}}
    <x-section title="Unsere Demenzbegleitung bietet" class="bg-gray-50 py-20">
        <div class="grid md:grid-cols-2 gap-8">
            <x-list.check :items="[
                'Sichere Tagesstruktur & Orientierungshilfen',
                'Vertraute Bezugspersonen mit Demenz-Erfahrung',
                'Geduldige Kommunikation & einfühlsamer Umgang',
                'Unterstützung bei alltäglichen Aktivitäten',
                'Entlastung für Angehörige & Pflegepersonen',
            ]" />

            <div class="space-y-4">
                <p class="text-gray-700 text-lg">
                    Unsere Demenzbegleitung richtet sich nach den Bedürfnissen des Einzelnen – liebevoll, respektvoll und
                    ohne Zeitdruck. Wir schaffen Stabilität im Alltag und sorgen für mehr Lebensqualität im Hier und Jetzt.
                </p>
            </div>
        </div>
    </x-section>

    {{-- Weitere Leistungen Teaser --}}
    <x-section title="Weitere Leistungen entdecken" class="bg-white py-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto px-4">
            <x-card.link href="/leistungen/stundenweise-betreuung" title="Stundenweise Betreuung"
                description="Flexible Unterstützung im Alltag – ganz nach Ihrem Bedarf." />

            <x-card.link href="/leistungen/alltagsbegleitung-haushalt" title="Alltagsbegleitung & Haushalt"
                description="Individuelle Hilfe im Haushalt & herzliche Begleitung durch den Tag." />

            <x-card.link href="/leistungen/begleitung-einkauf-arzt" title="Begleitung beim Einkauf & Arzt"
                description="Sicher unterwegs – mit unserer Begleitung zu Terminen und Besorgungen." />
        </div>
    </x-section>

@endsection
