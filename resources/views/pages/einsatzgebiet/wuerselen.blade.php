@extends('layouts.app')

@section('title', 'Seniorenbetreuung Würselen – Alltagshilfe & Betreuung vor Ort')
@section('description', 'Ihr Betreuungsdienst in Würselen: Persönliche Alltagshilfe, haushaltsnahe Unterstützung und individuelle Seniorenbetreuung mit Herz, Nähe und Verlässlichkeit – direkt vor Ort.')
@section('keywords', 'Seniorenbetreuung Würselen, Alltagshilfe Würselen, Betreuungsdienst Würselen, haushaltsnahe Unterstützung, Betreuung mit Herz, Seniorenhilfe Würselen, familiärer Betreuungsdienst')

@section('content')

    <x-navbar />
    {{-- Hero Section --}}
    <x-hero alt="Seniorenbetreuung in Würselen mit Spaziergang" :autoHeight="true" image="/img/betreuung-wuerselen.webp">
        <div class="text-white p-6 md:p-10 max-w-[1200px] space-y-4">
            <x-headline type="h1" class="text-white">
                Alltagshilfe mit Herz – <span class='highlight-dark'>Ihr Betreuungsdienst in Würselen</span>
            </x-headline>
        </div>
    </x-hero>

    {{-- Einleitung --}}
    <x-section title="Individuelle Unterstützung direkt vor Ort" class="py-20">
        <div class="grid md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-6 space-y-6">
                <p class="text-lg text-gray-700 leading-relaxed">
                    In Würselen begleiten wir Seniorinnen und Senioren im Alltag – ob bei Einkäufen, Arztbesuchen oder
                    einfach für ein gutes Gespräch. Wir helfen dort, wo Hilfe gebraucht wird – flexibel, menschlich und nah.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Unser Team kennt die Stadt und ihre Menschen. So entsteht eine persönliche Betreuung, die nicht nach
                    Schema F funktioniert, sondern nach dem, was wirklich zählt: Vertrauen, Nähe und Zeit.
                </p>
            </div>
            <div class="md:col-span-6">
                <figure class="overflow-hidden rounded-xl shadow-xl">
                    <img src="/img/betreuung-wuerselen.png" alt="Alltagsbegleitung in Würselen"
                        class="w-full h-full object-cover" loading="lazy" />
                </figure>
            </div>
        </div>
    </x-section>

    {{-- Vorteile --}}
    <x-section title="Ihre Vorteile in Würselen" class="from-gray-50 bg-gradient-to-b py-20">
        <x-list.check :items="[
            'Zuverlässige Haushaltshilfe & Alltagsbegleitung',
            'Feste Bezugspersonen mit Herz und Erfahrung',
            'Kurze Wege, schnelle Hilfe – lokal vor Ort',
            'Betreuung durch anerkannte Leistungen (§45a SGB XI)',
        ]" />
    </x-section>

    {{-- CTA --}}
    <x-section class="bg-brand text-white py-24 cp-2">

        <x-cta headline="Betreuung in Würselen gesucht?" button="Kontakt aufnehmen">
            Gern beantworten wir Ihre Fragen oder beraten Sie individuell zu unseren Leistungen in Würselen.
            Unverbindlich und persönlich.
        </x-cta>
    </x-section>

@endsection
