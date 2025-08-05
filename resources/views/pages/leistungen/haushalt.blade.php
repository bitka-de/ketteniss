@extends('layouts.app')

@section('title', 'Alltagsbegleitung & Haushalt in Aachen – Haushaltshilfe & Betreuung für Senioren')
@section('description', 'Professionelle Alltagsbegleitung und Haushaltshilfe für Senioren in Aachen. Unterstützung beim Kochen, Putzen, Einkaufen und mehr – individuell, zuverlässig und herzlich.')
@section('keywords', 'Alltagsbegleitung Aachen, Haushaltshilfe Aachen, Seniorenbetreuung Aachen, Unterstützung im Alltag, Hilfe für Senioren, Betreuung Haushalt Aachen, Seniorenhilfe Aachen, Alltagshilfe Aachen')

@section('content')

    <x-navbar />
    {{-- Hero Section --}}
    <x-hero alt="Seniorin bekommt Hilfe beim Kochen" :autoHeight="true">
        <div class="text-white p-6 md:p-10 max-w-[1200px] space-y-4">
            <x-headline type="h1" class="text-white">
                Alltagsbegleitung & Haushalt – <span class='highlight-dark'>wir helfen da, wo es zählt</span>
            </x-headline>
        </div>
    </x-hero>

    {{-- Einleitung --}}
    <x-section title="Gemeinsam durch den Alltag" class="py-20">
        <div class="grid md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-6 space-y-5">
                <p class="text-lg text-gray-700 leading-relaxed">
                    Viele Dinge, die früher leicht fielen, können im Alter zur Herausforderung werden. Hier kommen wir ins
                    Spiel: mit praktischer Hilfe im Haushalt und echter Gesellschaft.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Unsere Alltagsbegleiterinnen und -begleiter unterstützen beim Kochen, Putzen oder Einkaufen – und nehmen
                    sich Zeit für Gespräche, Erinnerungen und kleine Freuden des Lebens.
                </p>
            </div>
            <div class="md:col-span-6">
                <figure class="overflow-hidden rounded-xl h-[40vh] shadow-xl relative">
                    <img src="/img/leistungen/gespraech.webp" alt="Seniorin beim Gespräch mit einer Betreuerin"
                        class="w-full h-full object-cover" loading="lazy" />
                </figure>
            </div>
        </div>
    </x-section>

    {{-- Vorteile --}}
    <x-section title="Unsere Hilfe im Alltag umfasst" class="bg-gray-50 py-20">
        <div class="grid md:grid-cols-2 gap-8">

            <x-list.check :items="[
                'Hilfe beim Einkauf und Kochen',
                'Reinigung, Wäsche und Organisation im Haushalt',
                'Begleitung bei Spaziergängen und Terminen',
                'Gemeinsames Lesen, Spielen und Gespräche',
                'Entlastung für Angehörige',
            ]" />

            <div class="space-y-4">
                <p class="text-gray-700 text-lg">
                    Wir arbeiten mit Respekt, Geduld und echtem Interesse am Menschen. Unsere Betreuung bringt Struktur,
                    Sicherheit und soziale Nähe in Ihren Alltag – individuell angepasst.
                </p>
            </div>
        </div>
    </x-section>

    {{-- Weitere Leistungen Teaser --}}
    <x-section title="Auch interessant für Sie" class="py-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto px-4">
            <x-card.link href="/leistungen/stundenweise-betreuung" title="Stundenweise Betreuung"
                description="Flexibel, spontan & genau dann, wenn Sie uns brauchen – Betreuung auf Abruf." />

            <x-card.link href="/leistungen/demenzbegleitung" title="Demenzbegleitung"
                description="Unterstützung für Menschen mit Demenz – mit Verständnis und Struktur." />

            <x-card.link href="/leistungen/begleitung-einkauf-arzt" title="Begleitung zum Einkauf & Arzt"
                description="Wir begleiten zu Terminen, helfen beim Einkauf und bieten Sicherheit." />
        </div>
    </x-section>

@endsection
