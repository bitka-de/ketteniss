@extends('layouts.app')

@section('title', 'Kosten & Pflegekasse – Betreuungsdienst Ketteniß aus Aachen')
@section('description',
    'Erfahren Sie alles über die Kosten der Betreuung und die Unterstützung durch die Pflegekasse beim Betreuungsdienst Ketteniß aus Aachen. Individuelle Leistungen, faire Preise und Hilfe bei der Abrechnung.')
@section('keywords',
    'Kosten Betreuung, Pflegekasse, Entlastungsbetrag, Verhinderungspflege, Kurzzeitpflege, Betreuungsdienst Ketteniß, Seniorenhilfe Aachen, Pflegeleistungen Aachen')

@section('content')

    {{-- Hero Section --}}
    <x-navbar />
    <x-hero alt="Beratung zur Pflegekasse" :autoHeight="true">
        <div class="text-white p-6 md:p-10 max-w-[1200px] space-y-4">
            <x-headline type="h1" class="text-white">
                Gut betreut – <span class='highlight-dark'>mit fairen Kosten & klarer Unterstützung durch die
                    Pflegekasse</span>
            </x-headline>
        </div>
    </x-hero>

    {{-- Einführung --}}
    <x-section title="Was kostet die Betreuung – und was zahlt die Pflegekasse?" class="py-20">
        <div class="grid md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-6 space-y-5">

                <p class="text-lg text-gray-700 leading-relaxed">
                    Unsere Leistungen sind individuell auf Ihre Bedürfnisse zugeschnitten – und das spiegelt sich auch in
                    unserer fairen Preisgestaltung wider. Die gute Nachricht: Viele Angebote sind über die Pflegekasse
                    abrechenbar oder steuerlich begünstigt.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Besonders relevant: Pflegebedürftige ab Pflegegrad 1 erhalten monatlich 131 € Entlastungsbetrag (§§ 45a,
                    45b
                    SGB XI), den sie z. B. für unsere Betreuungs- und Alltagsbegleitung nutzen können.
                    Zusätzlich unterstützen wir Sie – je nach Pflegegrad – auch im Rahmen der Verhinderungs- (§ 39) und
                    Kurzzeitpflege (§ 42) oder bei der hauswirtschaftlichen Versorgung (§ 38).
                </p>
                <p class="text-lg font-bold text-balance leading-relaxed">
                    Natürlich helfen wir Ihnen auch bei der Antragstellung und Abrechnung.
                </p>

            </div>
            <div class="md:col-span-6">
                <figure class="overflow-hidden rounded-xl shadow-xl">
                    <img src="/img/default-1.png" alt="Beratung zur Finanzierung"
                        class="w-full h-full object-cover" loading="lazy" />
                </figure>
            </div>
        </div>
    </x-section>

    {{-- Vorteile --}}
    <x-section title="Ihre Vorteile auf einen Blick" class="bg-gray-50 py-20">
        <x-list.check :items="[
            'Monatlicher Entlastungsbetrag von 131 € nutzbar (§§ 45a, 45b SGB XI)',
            'Leistungen im Rahmen der Verhinderungs- (§ 39) und Kurzzeitpflege (§ 42) möglich',
            'Individuelle Betreuung und Entlastung für pflegende Angehörige (§§ 38, 45 SGB XI)',
            'Leistungen sind steuerlich absetzbar (§ 35a EStG)',
            'Unterstützung bei Antragstellung und Abrechnung mit Pflegekassen',
            'Faire und transparente Preisgestaltung – ohne versteckte Kosten',
        ]" />

    </x-section>

    {{-- Beratung CTA --}}
    <x-section class="bg-brand text-white py-24 cp-2">
        <x-cta title="Noch Fragen zu den Kosten oder zur Abrechnung mit der Pflegekasse?"
            text="Unsere erfahrenen Berater:innen helfen Ihnen kostenlos weiter – telefonisch, per E-Mail oder persönlich vor Ort."
            button-text="Jetzt beraten lassen" button-link="/kontakt" variant="white" />
    </x-section>


@endsection
