@extends('layouts.app')

@section('title', 'Begleitung zum Einkauf & Arzt in Aachen – Senioren sicher unterwegs')
@section('description', 'Persönliche Begleitung für Senioren in Aachen: Unterstützung beim Einkaufen, Arztbesuch und Besorgungen. Sicher, zuverlässig und individuell – für mehr Lebensqualität im Alltag.')
@section('keywords', 'Seniorenbegleitung Aachen, Einkaufshilfe Aachen, Begleitung Arzt Aachen, Unterstützung Senioren Alltag, Hilfe Besorgungen Aachen, Betreuung Senioren Aachen')

@section('content')

    <x-navbar />
    {{-- Hero Section --}}
    <x-hero alt="Seniorin wird beim Einkauf begleitet" :autoHeight="true">
        <div class="text-white p-6 md:p-10 max-w-[1200px] space-y-4">
            <x-headline type="h1" class="text-white">
                Sicher & begleitet unterwegs – <span class='highlight-dark'>zum Einkaufen oder zum Arzt</span>
            </x-headline>
        </div>
    </x-hero>

    {{-- Einleitung --}}
    <x-section title="Verlässliche Begleitung bei Besorgungen & Terminen" class="py-20">
        <div class="grid md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-6 space-y-5">
                <p class="text-lg text-gray-700 leading-relaxed">
                    Der Weg zum Supermarkt oder ein Arztbesuch kann im Alter beschwerlich oder verunsichernd sein. Mit
                    unserer einfühlsamen Begleitung sind Sie nie allein – wir sorgen für Sicherheit, Orientierung und
                    soziale Nähe.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Ob regelmäßige Besorgungen oder spontane Termine: Wir begleiten Sie pünktlich, diskret und zuverlässig –
                    ganz nach Ihrem Rhythmus und Bedarf.
                </p>
            </div>
            <div class="md:col-span-6">
                <figure class="overflow-hidden rounded-xl h-[40vh] shadow-xl relative">
                    <img src="/img/leistungen/einkaufen.webp" alt="Seniorin lacht mit Begleiterin"
                        class="w-full h-full object-cover object-left-top absolute" loading="lazy" />
                </figure>
            </div>
        </div>
    </x-section>

    {{-- Vorteile --}}
    <x-section title="Was unsere Begleitung besonders macht" class="bg-gray-50 py-20">
        <div class="grid md:grid-cols-2 gap-8">
            <x-list.check :items="[
                'Individuelle Begleitung beim Einkaufen & zu Terminen',
                'Sicherheit & Unterstützung unterwegs',
                'Verlässliche Ansprechpartner mit Erfahrung',
                'Stärkung der Eigenständigkeit',
                'Soziale Kontakte & Gespräche inklusive',
            ]" />

            <div class="space-y-4">
                <p class="text-gray-700 text-lg">
                    Unsere Mitarbeitenden gehen auf Wünsche und Bedürfnisse individuell ein. Wir helfen nicht nur beim
                    Tragen oder Organisieren – wir sind Zuhörer, Mitdenker und echte Begleiter im Alltag.
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

            <x-card.link href="/leistungen/demenzbegleitung" title="Demenzbegleitung"
                description="Einfühlsame Unterstützung für Menschen mit Demenz – mit Struktur und viel Verständnis." />
        </div>
    </x-section>

@endsection
