@extends('layouts.app')

@section('title', 'Datenschutz')

@section('content')
    <x-navbar />
    <x-hero alt="Datenschutz beim Betreuungsdienst" :autoHeight="true">

        <div class="text-white p-6 md:p-10 max-w-[1200px] space-y-4">
            <x-headline type="h1" class="text-white">
                Datenschutz – <span class='highlight-dark'>transparent und verantwortungsbewusst</span>
            </x-headline>
        </div>
    </x-hero>

    <x-section title="Datenschutzerklärung" class="py-20 space-y-10 text-gray-800">
        <div class=" flex flex-col gap-4">

            <x-headline type="h2">1. Verantwortlicher</x-headline>
            <p>
                Betreuungsdienst Ketteniß<br>
                Inhaberin: Iris Ketteniß<br>
                Urweg 19, 52149 Baesweiler, Deutschland<br>
                Tel.: +49 (0) 172 673 3371<br>
                E-Mail: <a href="mailto:ik@betreuungsdienst-ketteniss.de"
                    class="text-brand underline">ik@betreuungsdienst-ketteniss.de</a>
            </p>

            <x-headline type="h2">2. Arten der verarbeiteten Daten</x-headline>
            <ul class="list-disc pl-6 space-y-2">
                <li>Bestands- und Kontaktdaten (Name, E-Mail, Telefon, Adresse)</li>
                <li>Inhaltsdaten (Formulareingaben, Nachrichten)</li>
                <li>Nutzungsdaten (besuchte Seiten, IP-Adresse*, Browserdaten)</li>
                <li>*IP-Adressen werden gekürzt gespeichert</li>
            </ul>

            <x-headline type="h2">3. Zwecke & Rechtsgrundlagen</x-headline>
            <ul class="list-disc pl-6 space-y-2">
                <li>Webseitenbetrieb, Sicherheit (Art. 6 Abs. 1 lit. f DSGVO)</li>
                <li>Kontaktaufnahme, Kommunikation (Art. 6 Abs. 1 lit. b DSGVO)</li>
                <li>Erfüllung rechtlicher Pflichten (Art. 6 Abs. 1 lit. c DSGVO)</li>
            </ul>

            <x-headline type="h2">4. Hosting & Server-Logs</x-headline>
            <p>Unser Hosting-Anbieter erhebt Server-Logdaten wie IP, Browser, Datum/Uhrzeit, Referrer etc. Diese werden
                maximal 7 Tage gespeichert und danach anonymisiert oder gelöscht.</p>

            <x-headline type="h2">5. Kontaktaufnahme</x-headline>
            <p>Alle Angaben, die Sie uns über das Kontaktformular senden, werden zur Bearbeitung Ihrer Anfrage verarbeitet.
                Eine Weitergabe erfolgt nicht ohne Ihre ausdrückliche Zustimmung.</p>

            <x-headline type="h2">6. Cookies & Laravel-Sessions</x-headline>
            <p>Diese Website nutzt nur technisch notwendige Cookies (Laravel Session, XSRF-Tokens). Keine Werbe- oder
                Tracking-Cookies. Kein Cookie-Banner erforderlich gemäß § 25 Abs. 2 TTDSG.</p>

            <x-headline type="h2">7. Eingebettete Dienste</x-headline>
            <p>Auf der Kontaktseite wird Google Maps eingebunden. Beim Aufruf werden ggf. personenbezogene Daten an Google
                (USA) übertragen. Es gelten die Datenschutzrichtlinien von Google.</p>

            <x-headline type="h2">8. Soziale Netzwerke</x-headline>
            <p>Wir unterhalten Online-Profile bei Facebook & Instagram. Beim Besuch gelten die Datenschutzbedingungen der
                jeweiligen Plattform.</p>

            <x-headline type="h2">9. Weitergabe & Auftragsverarbeitung</x-headline>
            <p>Daten geben wir nur weiter, wenn gesetzlich erlaubt oder beauftragt. Mit unserem Hoster besteht ein
                AV-Vertrag nach Art. 28 DSGVO.</p>

            <x-headline type="h2">10. Ihre Rechte</x-headline>
            <ul class="list-disc pl-6 space-y-2">
                <li>Auskunft, Berichtigung, Löschung, Einschränkung (Art. 15-18 DSGVO)</li>
                <li>Datenübertragbarkeit (Art. 20 DSGVO)</li>
                <li>Widerspruch gegen Verarbeitung (Art. 21 DSGVO)</li>
                <li>Widerruf von Einwilligungen (Art. 7 Abs. 3 DSGVO)</li>
                <li>Beschwerde bei der zuständigen Aufsichtsbehörde (Art. 77 DSGVO)</li>
            </ul>

            <x-headline type="h2">11. Löschung von Daten</x-headline>
            <p>Personenbezogene Daten werden gelöscht, sobald der Verarbeitungszweck entfällt und keine gesetzlichen
                Aufbewahrungspflichten entgegenstehen (z. B. gem. § 147 AO).</p>
        </div>
    </x-section>
@endsection
