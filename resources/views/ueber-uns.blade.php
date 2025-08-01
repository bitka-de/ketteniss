@extends('layouts.app')

@section('title', 'Über uns – Betreuungsdienst Ketteniß aus Aachen')
@section('description',
    'Lernen Sie den Betreuungsdienst Ketteniß kennen – ein familiengeführtes Team aus Aachen für
    haushaltsnahe Seniorenhilfe mit Herz, Nähe und Verlässlichkeit.')
@section('keywords',
    'Betreuungsdienst Ketteniß, haushaltsnahe Seniorenhilfe Aachen, Betreuung mit Herz, Seniorenhilfe
    Aachen, familiärer Betreuungsdienst Aachen, Alltagshilfe Senioren')

@section('content')

    {{-- Hero mit fixem Navbar und Bild --}}
    <x-navbar />
    <x-hero image="/img/banner-about.webp" alt="Ältere Menschen beim Spielen" :autoHeight="true">
        <div class="text-white p-6 md:p-10 max-w-[1200px] space-y-4">
            <x-headline type="h1" class="text-white">
                Weil Vertrauen der Anfang von allem ist
            </x-headline>
        </div>
    </x-hero>

    {{-- Intro-Block --}}
    <x-section class="py-24" title="Wertschätzung beginnt mit Zuhören">
        <div class="grid md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-6">
                <figure class="overflow-hidden rounded-xl shadow-lg">
                    <picture>
                        <source srcset="/img/team.webp" type="image/webp">
                        <source srcset="/img/team.png" type="image/png">
                        <img src="/img/team.png" alt="Team von Betreuungsdienst Ketteniß" class="w-full h-full object-cover"
                            loading="lazy" />
                    </picture>

                </figure>
            </div>

            <div class="md:col-span-6 space-y-5">
                <x-headline type="h2">
                    Unsere Geschichte ist gelebte Nähe.
                </x-headline>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Der Betreuungsdienst Ketteniß ist kein Konzern, sondern ein familiengeführtes Team aus der Region. Wir
                    sind Menschen, die mit Herz, Verlässlichkeit und echtem Einsatz für andere da sind – persönlich,
                    verbindlich und nah.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Über 300 Menschen mit Pflegegrad vertrauen bereits auf unsere Unterstützung. Wir entlasten Angehörige,
                    bringen neue Struktur in den Alltag und begegnen unseren Klient:innen mit Würde und Respekt. Was uns
                    antreibt? Das Vertrauen, das man uns schenkt – und der Anspruch, diesem Tag für Tag gerecht zu werden.
                </p>
            </div>
        </div>
    </x-section>

    {{-- Werte & Haltung --}}
    <x-section title="Wofür wir stehen" class="bg-stone-50 pt-12 py-18 shadow-2xl">
        <div class="grid md:grid-cols-3 gap-10">
            <div class="space-y-2">
                <x-headline type="h4">
                    Menschlichkeit
                </x-headline>
                <p class="text-gray-600">Bei uns zählt nicht nur der Bedarf, sondern der Mensch. Wir begegnen jedem mit
                    Respekt, Einfühlung und Herzlichkeit.</p>
            </div>
            <div class="space-y-2">
                <x-headline type="h4">
                    Verantwortung
                </x-headline>
                <p class="text-gray-600">Wir halten Wort. Unsere Betreuung ist zuverlässig, transparent und auf Kontinuität
                    ausgelegt.</p>
            </div>
            <div class="space-y-2">
                <x-headline type="h4">
                    Vertrauen
                </x-headline>
                <p class="text-gray-600">Vertrauen ist die Basis für alles. Darum arbeiten wir partnerschaftlich – mit
                    Familien, Klient:innen und Kooperationsstellen.</p>
            </div>
        </div>
    </x-section>

    {{-- Zahlen & Einblick --}}
    <x-section class="py-24">
        <div class="grid md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-6 space-y-4">
                <x-headline type="h2">
                    Gemeinsam stark für die Region Aachen
                </x-headline>
                <p class="text-gray-700 text-lg">
                    Der Betreuungsdienst Ketteniß ist kein Konzern, sondern ein familiengeführtes Team aus der Region.
                    Persönlich, verbindlich und nah begleiten wir Menschen in Aachen, Herzogenrath und Würselen – Tag für
                    Tag,
                    mit Herz und Verlässlichkeit.</p>

                <p class="text-gray-700 text-lg">
                    Über 300 Menschen mit Pflegegrad vertrauen bereits auf unsere Unterstützung. Ob regelmäßige Betreuung,
                    kurzfristige Entlastung oder individuelle Hilfen im Alltag – unsere Teams sind lokal verankert, schnell
                    zur
                    Stelle und arbeiten eng mit Ärzt:innen, Apotheken und Pflegediensten zusammen. Für eine Betreuung, die
                    entlastet und auf Augenhöhe stattfindet.</p>

                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-800 mt-6">
                    <x-list.small-check>Kurze Wege & feste Ansprechpartner:innen</x-list.small-check>
                    <x-list.small-check>Monatlicher Entlastungsbetrag von 131 € (§ 45a, 45b SGB XI)</x-list.small-check>
                    <x-list.small-check>Leistungen bei Verhinderungs- (§ 39) und Kurzzeitpflege (§ 42)</x-list.small-check>
                    <x-list.small-check>Individuelle Entlastung für Angehörige (§ 38, 45 SGB XI)</x-list.small-check>
                    <x-list.small-check>Steuerlich absetzbar (§ 35a EStG)</x-list.small-check>
                    <x-list.small-check>Unterstützung bei Antrag & Abrechnung mit Pflegekassen</x-list.small-check>
                    <x-list.small-check>Faire, transparente Preise – ohne versteckte Kosten</x-list.small-check>
                </ul>
            </div>

            <div class="md:col-span-6">
                <figure class="overflow-hidden rounded-xl shadow-xl">
                    <picture>
                        <source srcset="/img/team-landscape.webp" type="image/webp">
                        <source srcset="/img/team-landscape.png" type="image/png">
                        <img src="/img/team-landscape.png" alt="Seniorin lacht mit Begleiterin"
                            class="w-full h-full object-cover" loading="lazy" />
                    </picture>
                </figure>
            </div>
        </div>
    </x-section>

    {{-- Abschluss CTA --}}
    <x-section class="bg-brand text-white py-24 cp-2">
        <x-cta headline="Sie suchen eine Betreuung mit Herz?"
            text="Dann lernen Sie uns persönlich kennen. Wir nehmen uns Zeit für Sie und beraten Sie gerne individuell zu
                Ihren Fragen und Möglichkeiten."
            buttonText="Termin vereinbaren" buttonHref="/kontakt" variant="white" />
    </x-section>

@endsection
