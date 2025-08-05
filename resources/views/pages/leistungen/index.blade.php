@extends('layouts.app')

@section('title', 'Seniorenbetreuung & Alltagshilfe in Aachen – Leistungen Ketteniß')
@section('description', 'Individuelle Seniorenbetreuung, Haushaltshilfe, Demenzbegleitung und flexible Unterstützung in Aachen & Umgebung. Persönlich, erfahren & zuverlässig – Ketteniß Betreuungsdienst.')
@section('keywords', 'Seniorenbetreuung Aachen, Alltagshilfe Aachen, Haushaltshilfe für Senioren, Demenzbegleitung Aachen, flexible Betreuung, stundenweise Betreuung, Begleitung Arztbesuch, Unterstützung im Alltag, Pflegekasse Aachen')

@section('content')

    <x-navbar />
    <x-hero image="/img/banner.webp" alt="Ältere Menschen beim Spielen" :autoHeight="true">
        <div class="text-white p-6 md:p-10 max-w-[1200px] space-y-4">
            <x-headline type="h1" class="text-white">
                Weil Betreuung mehr ist als Hilfe – <span class='highlight-dark'>unsere Leistungen für Ihre
                    Lebensqualität</span>
            </x-headline>
        </div>
    </x-hero>

    <x-section title="Was wir für Sie tun können" class="py-20">
        <div class="max-w-7xl mx-auto mb-12">
            <p class="text-plus">
                Unsere Leistungen sind so individuell wie Ihre Lebenssituation. Ob für ein paar Stunden in der Woche oder
                täglich im Einsatz: Wir begleiten Sie mit Herz, Struktur und Erfahrung.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">

            <x-card.link href="/leistungen/alltagsbegleitung-haushalt" title="Alltagsbegleitung & Haushalt"
                description="Einkaufen, kochen, putzen, plaudern – wir helfen im Alltag und bringen Entlastung nach Hause." />

            <x-card.link href="/leistungen/stundenweise-betreuung" title="Stundenweise Betreuung"
                description="Flexibel, spontan & genau dann, wenn Sie uns brauchen – Betreuung auf Abruf für Senioren in Aachen." />

            <x-card.link href="/leistungen/demenzbegleitung" title="Demenzbegleitung"
                description="Einfühlsame Unterstützung für Menschen mit Demenz – mit viel Geduld, Struktur und Herz." />

            <x-card.link href="/leistungen/begleitung-einkauf-arzt" title="Begleitung beim Einkauf & Arztbesuch"
                description="Wir begleiten zu Terminen, helfen beim Einkaufen und sind als Ansprechpartner an Ihrer Seite." />

            <x-card.link href="/kosten" title="Kosten & Pflegekasse"
                description="Welche Leistungen übernimmt die Pflegekasse? Was ist steuerlich absetzbar? Wir helfen Ihnen beim Durchblick." />

            <x-card.link href="/einsatzgebiet" title="Unser Einsatzgebiet"
                description="Aachen, Herzogenrath, Würselen und Umgebung – wir sind lokal verwurzelt und schnell bei Ihnen vor Ort." />
        </div>
    </x-section>

    <x-partner/>

    <x-section class="bg-brand text-white py-20 cp-2">

        <x-cta headline="Nicht sicher, was Sie brauchen?"
            text="Lassen Sie uns gemeinsam herausfinden, wie wir Ihnen oder Ihren Liebsten am besten helfen können. Ein
                Gespräch ist der erste Schritt."
            buttonText="Unverbindlich beraten lassen" buttonHref="/kontakt" variant="white" />

    </x-section>

@endsection
