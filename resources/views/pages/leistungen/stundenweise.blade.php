@extends('layouts.app')

@section('title', 'Stundenweise Betreuung – Flexible Seniorenhilfe in Aachen')
@section('description', 'Unsere stundenweise Betreuung in Aachen entlastet Angehörige und bringt Struktur in den Alltag – flexibel, herzlich und individuell anpassbar.')
@section('keywords', 'stundenweise Betreuung Aachen, flexible Seniorenbetreuung, Entlastung pflegender Angehöriger, stundenweise Hilfe Senioren, Seniorenbegleitung Aachen')


@section('content')

    <x-navbar />
    {{-- Hero Section --}}
    <x-hero alt="Seniorin bei der Unterhaltung mit einer Betreuerin" :autoHeight="true">
        <div class="text-white p-6 md:p-10 max-w-[1200px] space-y-4">
            <x-headline type="h1" class="text-white">
                Betreuung genau dann, wenn Sie uns brauchen – <span class='highlight-dark'>stundenweise Hilfe mit Herz</span>
            </x-headline>
        </div>
    </x-hero>

    {{-- Einleitung --}}
    <x-section title="Was ist stundenweise Betreuung?" class="py-20">
        <div class="grid md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-6 space-y-5">
                <p class="text-lg text-gray-700 leading-relaxed">
                    Nicht jeder braucht eine dauerhafte Betreuung. Manchmal reicht es, wenn jemand stundenweise zur Seite
                    steht – sei es beim Einkaufen, beim Arztbesuch oder einfach beim gemeinsamen Kaffee.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Unsere stundenweise Betreuung ist flexibel planbar und richtet sich ganz nach Ihrem Alltag. Sie
                    entscheiden, wann und wie oft wir kommen – wir kümmern uns zuverlässig um alles Weitere.
                </p>
            </div>
            <div class="md:col-span-6">
                <figure class="overflow-hidden rounded-xl h-[40vh] shadow-xl relative">
                    <img src="/img/leistungen/gespraech-2.webp" alt="Seniorin lacht mit Begleiterin"
                        class="w-full h-full object-cover object-left-top absolute" loading="lazy" />
                </figure>
            </div>
        </div>
    </x-section>

    {{-- Vorteile --}}
    <x-section title="Warum stundenweise Betreuung sinnvoll ist" class="bg-gray-50 py-20">
        <div class="grid md:grid-cols-2 gap-8">


            <x-list.check :items="[
                'Entlastung für pflegende Angehörige',
                'Struktur und Abwechslung im Alltag',
                'Zeit für Gespräche, Spaziergänge und Aktivitäten',
                'Flexibel buchbar – von wenigen Stunden bis regelmäßig',
                'Anrechnung auf Pflegekasse möglich (§45a SGB XI)',
            ]" />

            <div class="space-y-4">
                <p class="text-gray-700 text-lg">
                    Besonders im Alltag können ein paar Stunden Begleitung den Unterschied machen. Unsere Mitarbeitenden
                    bringen Erfahrung, Herzlichkeit und Geduld mit – und gehen auf individuelle Bedürfnisse ein.
                </p>
            </div>
        </div>
    </x-section>

    {{-- Weitere Leistungen Teaser --}}
    <x-section title="Weitere Leistungen entdecken" class="bg-white py-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto px-4">
            <x-card.link href="/leistungen/alltagsbegleitung-haushalt" title="Alltagsbegleitung & Haushalt"
                description="Wir helfen im Haushalt, beim Kochen, Putzen und Plaudern – individuell und herzlich." />

            <x-card.link href="/leistungen/demenzbegleitung" title="Demenzbegleitung"
                description="Einfühlsame Unterstützung für Menschen mit Demenz – mit Struktur und viel Verständnis." />

            <x-card.link href="/leistungen/begleitung-einkauf-arzt" title="Begleitung beim Einkauf & Arzt"
                description="Wir begleiten zu Terminen, helfen beim Einkaufen und sorgen für Sicherheit." />
        </div>
    </x-section>

@endsection
