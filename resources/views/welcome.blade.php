@extends('layouts.app')

@section('title', 'Betreuungsdienst Ketteniß – Alltagshilfe in Aachen mit Herz')
@section('description',
    'Herzliche Alltagsbegleitung & Haushaltshilfe in Aachen. Der Betreuungsdienst Ketteniß bietet
    persönliche Seniorenbetreuung mit Nähe & Vertrauen.')
@section('keywords',
    'Betreuungsdienst Aachen, Alltagsbegleitung Aachen, Haushaltshilfe Aachen, Seniorenbetreuung
    Aachen, häusliche Pflege Aachen, Alltagshilfe Senioren')


@section('content')

    {{-- Hero-Bereich --}}
    <x-navbar />
    <x-hero image="/img/hero-1.webp" alt="Seniorin beim Spielen" label="Betreuung mit Herz">

        <div class="text-white p-6 md:p-10 mt-32 max-w-[800px] space-y-6">
            <x-headline type="h1" class="text-white">
                Betreuung, die berührt. <span class='highlight-dark'>Entlastung, die bleibt.</span>
            </x-headline>

            <p class="text-plus">
                Wir unterstützen Menschen mit Pflegegrad und Senioren in Aachen – mit echter Nähe, Zeit und Herzblut.
Ob Haushalt, Gespräch oder Begleitung – wir sind da, wenn es zählt.
            </p>
        </div>
    </x-hero>

    {{-- Visueller Aufmacherbereich mit Bild und Zahlen --}}
    <section class="section grid grid-cols-1 gap-8 px-4 py-16 md:grid-cols-12 max-w-7xl mx-auto">
        <div class="relative col-span-full min-h-48 overflow-clip rounded-xl md:col-span-4">
            <picture>
                <source srcset="img/welcome.webp" type="image/webp">
                <source srcset="img/welcome.png" type="image/png">
                <img src="img/welcome.png" class="absolute h-full w-full object-cover rounded-xl"
                    alt="Pflegesituation mit Nähe und Vertrauen" loading="lazy" />
            </picture>

        </div>
        <div class="col-span-full space-y-6 self-end md:col-span-8">
            <x-badge pos="left">Willkommen</x-badge>
            <x-headline type="h2">
                Erleben Sie einen neuen, <span class="highlight">wertvollen Lebensabschnitt</span>
            </x-headline>

            <p class="text-lg">
                In unserem Betreuungsdienst ist jeder Moment mit Sorgfalt gestaltet – für ein Leben in Würde, mit neuer
                Lebensfreude, echten Beziehungen und liebevoller Begleitung.
            </p>

            <section
                class="grid w-full border-black/10 *:border-black/10 md:grid-cols-2 md:border-t md:border-b divide-y md:divide-y-0">
                <div class="sm:flex flex-col hidden py-4 md:min-h-24 md:items-center md:justify-center md:border-r md:py-6">
                    <span class="flex gap-1 text-3xl font-semibold text-brand"><span
                            class="text-5xl md:text-7xl">300</span>+</span>
                    <span>Kunden vertrauen uns</span>
                </div>
                <div class="text-sm md:min-h-24 md:px-4 md:py-6">
                    <p class="text-gray-700">Unser Ziel ist es, Ihnen Sicherheit zu geben – mit verständlichen Informationen
                        und einfühlsamer Beratung, damit Sie die bestmögliche Entscheidung für einen geliebten Menschen
                        treffen können.</p>
                </div>
            </section>
        </div>
    </section>

    {{-- Leistungs-Teaser --}}
    <x-section title="Unsere Hauptangebote im Überblick" class="py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <x-card.link href="/leistungen" title="Unsere Leistungen"
                description="Von der stundenweisen Betreuung über Demenzbegleitung bis zur Alltagshilfe – individuell, herzlich und zuverlässig." />
            <x-card.link href="/ueber-uns" title="Über uns"
                description="Wer steckt hinter dem Betreuungsdienst Ketteniß? Lernen Sie unsere Werte, Motivation und Arbeitsweise kennen." />
            <x-card.link href="/einsatzgebiet" title="Wo wir helfen"
                description="Wir sind in Aachen, Herzogenrath, Würselen und Umgebung aktiv – mit Herz vor Ort. Finden Sie heraus, ob wir auch Sie betreuen können." />
            <x-card.link href="/kosten" title="Kosten & Pflegekasse"
                description="Erfahren Sie, wie viel unsere Betreuung kostet, was die Pflegekasse übernimmt und was steuerlich absetzbar ist." />
        </div>
    </x-section>

    {{-- Vertrauen schaffen --}}
    <x-section title="Warum Familien uns weiterempfehlen" class="py-12 text-brand">
        <p class="mb-8 max-w-[70ch]">
            Unsere Klient:innen und ihre Angehörigen spüren, dass bei uns der Mensch im Mittelpunkt steht. Mit echter
            Zuwendung, Zuverlässigkeit und einem offenen Ohr schaffen wir Sicherheit im Alltag – und genau das bleibt in
            Erinnerung. Deshalb empfehlen Familien uns gerne weiter.
        </p>
        <div class="grid md:grid-cols-3 gap-10 text-center">
            <x-card.icon title="Ein starkes Team"
                text="Unsere Mitarbeiter:innen sind das Herzstück unseres Dienstes. Mit Empathie, Erfahrung und einem echten Miteinander sorgen sie Tag für Tag dafür, dass sich unsere Klient:innen bestens betreut fühlen. Denn gute Betreuung beginnt mit einem guten Team.">
                <svg class="size-16" viewBox="0 0 64 64">
                    <g fill="currentColor">
                        <path
                            d="M16.4201 25.197c-1.1182 1.3528-1.8397 3.0456-1.9863 4.9003l-.0276.7027v15.1968c0 2.7091.612 5.2755 1.7054 7.568-1.0531.2848-2.1628.4352-3.3076.4352C5.73254 54 0 48.2675 0 41.1962V30.8c0-2.9382 2.26275-5.3478 5.1407-5.5814L5.6 25.2l10.8201-.003Zm31.1789 0L58.4 25.2c3.0928 0 5.6 2.5072 5.6 5.6v10.4C64 48.2691 58.2691 54 51.2 54c-1.1405 0-2.2464-.1491-3.2989-.4291.9619-2.0093 1.5511-4.2263 1.6832-6.5648l.0285-1.0093V30.8c0-2.129-.7558-4.081-2.0138-5.603ZM52.8 6c4.4182 0 8 3.58173 8 8 0 4.4183-3.5818 8-8 8-4.4182 0-8-3.5817-8-8 0-4.41827 3.5818-8 8-8ZM11.2 6c4.4183 0 8 3.58173 8 8 0 4.4183-3.5817 8-8 8-4.41827 0-8-3.5817-8-8 0-4.41827 3.58173-8 8-8Z"
                            opacity=".4" />
                        <path
                            d="M40.5568 25.5556c3.0062 0 5.4432 2.5246 5.4432 5.6388v15.3024C46 54.5066 39.7319 61 32.0001 61 24.268 61 18 54.5066 18 46.4968V31.1944c0-3.1142 2.437-5.6388 5.4432-5.6388h17.1136ZM31.9908 3c5.1536 0 9.3312 4.32793 9.3312 9.6667 0 5.3387-4.1776 9.6666-9.3312 9.6666-5.1536 0-9.3312-4.3279-9.3312-9.6666C22.6596 7.32793 26.8372 3 31.9908 3Z" />
                    </g>
                </svg>

                </x-card-icon>

                <x-card.icon title="Einfach gut betreut "
                    text="Ob im Alltag, bei kleinen Handgriffen oder einfach als verlässliche Begleitung – unsere Betreuungskräfte sind für Sie da. Mit Erfahrung, Aufmerksamkeit und einem offenen Ohr sorgen wir dafür, dass sich unsere Klient:innen rundum gut aufgehoben fühlen.">
                    <svg class="size-16" viewBox="0 0 64 64">
                        <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                            <path
                                d="M22.518 1c-3.5881 0-6.2209 3.44602-5.3506 7.00338l.7833 3.20202c.1534.6273.7049 1.0673 1.3377 1.0673h25.4233c.6326 0 1.1841-.44 1.3377-1.0673l.7832-3.20202C47.7029 4.44602 45.0702 1 41.4819 1H22.518Zm-2.9273 16.9091c-.7615 0-1.3861.6327-1.311 1.4071C18.9706 26.4378 24.8497 32 32.0001 32c7.1502 0 13.0293-5.5622 13.7203-12.6838.075-.7744-.5496-1.4071-1.311-1.4071H19.5907Z"
                                opacity=".4" />
                            <path
                                d="M25.1997 35.0048C15.0408 35.6527 7 44.1733 7 54.5896 7 59.2344 10.731 63 15.3333 63h33.3334C53.2692 63 57 59.2344 57 54.5896c0-10.4163-8.0408-18.9369-18.1997-19.5848-.7903-.0505-1.5461.3014-2.0731.8977l-3.6908 4.201c-.2761.3123-.6561.4684-1.0364.4684-.3803 0-.7603-.1561-1.0364-.4684l-3.6908-4.201c-.527-.5963-1.2829-.9482-2.0731-.8977Zm1.2447 8.3709c.767 0 1.3889.6277 1.3889 1.4017v2.8038h2.7778c.767 0 1.3889.6274 1.3889 1.4017v2.8035c0 .774-.6219 1.4017-1.3889 1.4017h-2.7778v2.8032c0 .7741-.6219 1.4018-1.3889 1.4018h-2.7777c-.7671 0-1.3889-.6277-1.3889-1.4018l-.0001-2.8032H19.5c-.7671 0-1.3889-.6277-1.3889-1.4017v-2.8035c0-.774.6218-1.4017 1.3889-1.4017h2.7777v-2.8038c0-.774.6219-1.4017 1.3889-1.4017h2.7778Z" />
                        </g>
                    </svg>
                    </x-card-icon>


                    <x-card.icon title="Mit Herz und Hand"
                        text="Was unsere Arbeit besonders macht, ist die menschliche Nähe. Wir hören zu, sind da, wenn man uns braucht, und begleiten mit Wärme und Respekt. Für uns zählt nicht nur, was getan wird – sondern wie.">
                        <svg class="size-16" viewBox="0 0 64 64">
                            <g fill="currentColor">
                                <path
                                    d="M45.817 7.306c-1.716-1.616-3.913-2.392-6.127-2.392a9.771 9.771 0 0 0-6.884 2.86L32 8.581l-.806-.807a9.774 9.774 0 0 0-6.884-2.86c-2.215 0-4.41.776-6.127 2.392a9.15 9.15 0 0 0-.202 13.137L32 34.463l14.02-14.02a9.15 9.15 0 0 0-.203-13.137z" />
                                <path
                                    d="m27.086 59.086-.01-13.89c0-6.709-3.437-10.642-7.988-12.123-1.27-.385-2.409-1.395-3.467-2.454-1.923-2.003-3.98-4.742-6.642-4.708l-.003-.01c-.869.011-1.737.325-2.49 1.078-1.767 1.767-1.053 4.465.47 5.989l4.948 4.947a2.462 2.462 0 0 1 0 3.483l-6.689-6.69c-1.162-1.162-1.952-2.733-2.168-4.31-.268-1.965.335-3.797 1.697-5.16a5.954 5.954 0 0 1 3.637-1.741l-1-4.035C7.307 4.486.002 6.315.002 9.838L0 36.128c0 1.633.633 3.172 1.782 4.334 12.232 12.346 10.53 8.368 10.53 18.624h14.774zM64 9.838c0-3.522-7.306-5.352-7.382 9.624l-.999 4.035a5.955 5.955 0 0 1 3.637 1.742c1.362 1.362 1.965 3.194 1.697 5.159-.216 1.577-1.006 3.148-2.168 4.31l-6.69 6.69a2.463 2.463 0 0 1 0-3.483l4.949-4.947c1.523-1.524 2.237-4.222.47-5.989-.753-.753-1.622-1.067-2.49-1.078l-.003.01c-2.663-.034-4.719 2.705-6.642 4.708-1.059 1.06-2.197 2.069-3.467 2.454-4.551 1.48-7.987 5.414-7.987 12.122l-.011 13.89h14.774c0-10.255-1.702-6.277 10.53-18.623A6.123 6.123 0 0 0 64 36.129V9.839z"
                                    opacity=".4" />
                            </g>
                        </svg>
                        </x-card-icon>

        </div>
    </x-section>


    <section class="py-16 relative">

        <svg xmlns="http://www.w3.org/2000/svg" class=" size-24 z-0  absolute right-4 top-10 opacity-10" fill="#000000"
            viewBox="0 0 256 256">
            <path
                d="M100,56H40A16,16,0,0,0,24,72v64a16,16,0,0,0,16,16h60v8a32,32,0,0,1-32,32,8,8,0,0,0,0,16,48.05,48.05,0,0,0,48-48V72A16,16,0,0,0,100,56Zm0,80H40V72h60ZM216,56H156a16,16,0,0,0-16,16v64a16,16,0,0,0,16,16h60v8a32,32,0,0,1-32,32,8,8,0,0,0,0,16,48.05,48.05,0,0,0,48-48V72A16,16,0,0,0,216,56Zm0,80H156V72h60Z">
            </path>
        </svg>


        <svg xmlns="http://www.w3.org/2000/svg" class=" size-24 rotate-180 absolute bottom-0 left-4 opacity-5" fill="#000000"
            viewBox="0 0 256 256">
            <path
                d="M100,56H40A16,16,0,0,0,24,72v64a16,16,0,0,0,16,16h60v8a32,32,0,0,1-32,32,8,8,0,0,0,0,16,48.05,48.05,0,0,0,48-48V72A16,16,0,0,0,100,56Zm0,80H40V72h60ZM216,56H156a16,16,0,0,0-16,16v64a16,16,0,0,0,16,16h60v8a32,32,0,0,1-32,32,8,8,0,0,0,0,16,48.05,48.05,0,0,0,48-48V72A16,16,0,0,0,216,56Zm0,80H156V72h60Z">
            </path>
        </svg>

        <h3 class=" p-4 mx-auto max-w-7xl">Kundenstimmen</h3>

        <x-infinite-quote-scroller :quotes="[
            ['name' => 'Frau Harnak', 'text' => 'Ich fühle mich verstanden.'],
            ['name' => 'Frau Sieger', 'text' => 'Immer zuverlässig und professionell'],
            [
                'name' => 'Herr Schönen',
                'text' => 'Hätte ich sie mal eher gekannt, dann hätte ich mir viele andere Dienste sparen können.',
            ],
            ['name' => 'Herr Becker', 'text' => 'Wir haben das gefunden was wir gesucht haben.'],
            ['name' => 'Frau Dimitrios', 'text' => 'Wechseln kommt nicht mehr in Frage'],
        ]" />

    </section>




    {{-- Kontakt CTA --}}
    <x-section class="bg-brand text-white py-24 cp-2">
        <x-cta headline="Lassen Sie uns ins Gespräch kommen."
            text="Wir beraten Sie kostenlos und unverbindlich. Rufen Sie uns an oder schreiben Sie uns – wir sind für Sie da."
            buttonText="Kontakt aufnehmen" buttonHref="/kontakt" variant="white" />

    </x-section>

@endsection
