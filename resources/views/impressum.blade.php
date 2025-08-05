@extends('layouts.app')

@section('title', 'Impressum')
@section('robots', 'noindex, nofollow')


@section('content')

    <x-navbar />
    <x-hero alt="Impressum" :autoHeight="true">
        <div class="text-white p-6 md:p-10 max-w-[1200px] space-y-4">
            <x-headline type="h1" class="text-white">
                Rechtlich abgesichert – <span class="highlight-dark">unser Impressum</span>
            </x-headline>
        </div>
    </x-hero>

    <x-section class="py-20">
        <div class=" flex flex-col gap-4">
            <h2>Angaben gemäß § 5 DDG</h2>

            <p>
                <strong>Betreuungsdienst Ketteniß UG <span class="text-muted">(Haftungsbeschrenkt)</span></strong><br>
                Geschäftsführer: Jan Ketteniß<br>
                {{ config('company.adress') }}<br>
                Deutschland
            </p>

            <h2>Kontakt</h2>
            <p>
                Telefon: <a href="tel:{{ config('company.phone') }}">{{ config('company.phone') }}</a><br>
                E-Mail: <a href="mailto:{{ config('company.mail') }}">{{ config('company.mail') }}</a>
            </p>

            <h2>Verantwortlich für den Inhalt nach § 18 Abs. 2 MStV</h2>
            <p>
                Jan Ketteniß<br>
                {{ config('company.adress') }}<br>
            </p>

            <h2>Haftungsausschluss</h2>

            <h3>Haftung für Inhalte</h3>
            <p>
                Als Diensteanbieter sind wir gemäß § 7 Abs. 1 DDG für eigene Inhalte auf diesen Seiten nach den allgemeinen
                Gesetzen verantwortlich.
                Nach §§ 8 bis 10 DDG sind wir jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen
                zu überwachen oder
                nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.
            </p>
            <p>
                Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen
                bleiben hiervon unberührt.
                Eine entsprechende Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung
                möglich.
                Bei Bekanntwerden von Rechtsverletzungen entfernen wir diese Inhalte umgehend.
            </p>

            <h3>Haftung für Links</h3>
            <p>
                Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben.
                Deshalb übernehmen wir für diese fremden Inhalte auch keine Gewähr.
                Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten
                verantwortlich.
            </p>
            <p>
                Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft.
                Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar.
                Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer
                Rechtsverletzung nicht zumutbar.
                Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.
            </p>
        </div>
    </x-section>

@endsection
