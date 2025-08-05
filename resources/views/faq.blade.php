@extends('layouts.app')

@section('title', 'FAQ – Häufige Fragen zur Seniorenbetreuung in Aachen')
@section('description',
    'Antworten auf die häufigsten Fragen zur Seniorenbetreuung und Alltagshilfe in Aachen – Betreuungsdienst Ketteniß informiert klar und verständlich.')
@section('keywords',
    'FAQ Seniorenbetreuung Aachen, Betreuungsdienst Ketteniß, Alltagshilfe Senioren, Pflegekasse, Betreuung mit Herz, flexible Seniorenhilfe Aachen')

@section('content')

    <x-navbar />
    <x-hero alt="Fragen und Antworten zur Betreuung" :autoHeight="true">
        <div class="text-white p-6 md:p-10 max-w-[1200px] space-y-4">
            <x-headline type="h1" class="text-white">
                Häufige Fragen – <span class='highlight-dark'>klar & verständlich beantwortet</span>
            </x-headline>
        </div>
    </x-hero>

    <x-section title="Alles Wichtige auf einen Blick" class="py-20">
        <div class="max-w-4xl mx-auto space-y-6">
            <x-faq.question question="Gibt es einen festen Ansprechpartner?">
                Ja, unser Geschäftsführer Jan Ketteniß sowie Frau Nathalie Gerth stehen Ihnen persönlich zur Seite.
            </x-faq.question>

            <x-faq.question question="Welche Leistungen bieten Sie an – und wann?">
                Unser Angebot umfasst unter anderem Alltagsbegleitung, Arztbegleitung, Hilfe im Haushalt und Betreuung. Die
                genauen Zeiten und Einsatzbereiche besprechen wir individuell mit Ihnen.
            </x-faq.question>

            <x-faq.question question="Arbeiten Sie auch am Wochenende?">
                Ja – nach individueller Absprache sind auch Termine am Wochenende möglich.
            </x-faq.question>

            <x-faq.question question="Wie ist das mit den Kosten?">
                Die Abrechnung erfolgt in der Regel direkt mit der Pflegekasse nach §45b SGB XI. Ihnen entstehen keine
                separaten Kosten, sofern ein Pflegegrad vorliegt.
            </x-faq.question>

            <x-faq.question question="Gibt es eine Vertragslaufzeit?">
                Nein – unsere Leistungen sind täglich kündbar. Wir möchten, dass Sie sich flexibel und sicher fühlen.
            </x-faq.question>
        </div>
    </x-section>

    <x-section class="bg-brand text-white py-24 cp-2">

        <x-cta headline="Noch Fragen offen?"
            text="Wir beraten Sie gerne persönlich und unverbindlich zu allen Themen rund um Betreuung und Alltagshilfe."
            button="Jetzt Kontakt aufnehmen" href="/kontakt" />

    </x-section>

@endsection
