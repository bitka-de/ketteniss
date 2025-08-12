@extends('layouts.app')


@section('title', 'Jobs – Betreuungskräfte & Haushaltshilfen gesucht')
@section('robots', 'index, follow')

@section('content')


    <x-navbar />
    <x-hero image="{{ asset('img/job-bg.png') }}" alt="Jobs Betreuungskraft Haushaltshilfe Ketteniß" :autoHeight="true"
        class="bg-gradient-to-r from-brand">
        <div class="text-white p-6 md:p-10 max-w-7xl space-y-4">
            <x-headline type="h1" class="text-white"><b class="text-accent-light">Jobs:</b> Betreuungskraft &
                Haushaltshilfe</x-headline>
            <p class="text-lg font-semibold">Bewerben für Alsdorf, Eschweiler, Würselen und Umgebung!</p>
            <p>Hauswirtschaftliche Betreuung für Menschen mit Pflegegrad.</p>
        </div>
    </x-hero>



    <x-section title="Deine Aufgaben bei uns" class="py-16 text-gray-800">
        <div class="max-w-7xl flex-col md:flex-row mx-auto space-y-6 flex gap-6">
            <div class="md:w-1/3 w-full min-h-40  flex relative rounded-lg overflow-hidden">
                <img src="{{ asset('img/job-bg.png') }}" alt="Deine Aufgaben bei uns"
                    class=" w-full h-full object-cover absolute top-0 left-0" loading="lazy" />
            </div>
            <div class="md:w-2/3  space-y-4">
                <p class="text-lg">Als Betreuungskraft oder Haushaltshilfe unterstützt du Menschen mit Pflegegrad im Alltag
                    und sorgst für ein angenehmes, sicheres Zuhause. Deine Aufgaben sind vielseitig und sinnstiftend:</p>


                <x-list.check-job :items="[
                    '<b>Hauswirtschaftliche Tätigkeiten</b> wie Reinigung, Wäsche und Einkaufen',
                    'Unterstützung bei <b>alltäglichen Aufgaben</b> und Terminen',
                    'Begleitung zu <b>Arztbesuchen</b> oder beim Spaziergang',
                    'Gesellschaft leisten, zuhören und für <b>Abwechslung</b> sorgen',
                    'Mitwirkung an einer <b>freundlichen und wertschätzenden Atmosphäre</b>',
                    'Dokumentation deiner Arbeit und <b>Kommunikation mit dem Team</b>',
                ]" />



                <p class="text-lg"><b>Du bist ein wichtiger Teil</b> für unsere Klient:innen und trägst dazu bei, dass sie
                    sich
                    wohl und unterstützt fühlen!</p>
            </div>
        </div>
    </x-section>


    <div class="max-w-7xl mx-auto md:px-4 bg-gradient-to-bl from-brand to-brand-light py-8 md:rounded-lg">
        <h2 class="text-3xl font-bold text-white pl-4">Das bringst du mit</h2>
        <div
            class="md:grid md:grid-cols-2 lg:grid-cols-3 gap-4 flex overflow-x-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100 px-2 py-8">
            <div
                class="flex md:block min-w-[70%] md:min-w-0 bg-white backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">🧹</span>
                <span class="font-bold text-lg mb-2">Sorgfalt & Sauberkeit</span>
                <span class="text-gray-700">Du arbeitest gewissenhaft und mit Liebe zum Detail.</span>
            </div>
            <div
                class="flex md:block min-w-[80%] md:min-w-0 bg-white backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">🤝</span>
                <span class="font-bold text-lg mb-2">Teamgeist</span>
                <span class="text-gray-700">Gemeinsam sind wir stark – du bringst dich ins Team ein.</span>
            </div>
            <div
                class="flex md:block min-w-[80%] md:min-w-0 bg-white backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">⏰</span>
                <span class="font-bold text-lg mb-2">Zuverlässigkeit</span>
                <span class="text-gray-700">Du bist pünktlich und verantwortungsbewusst – auf dich ist Verlass.</span>
            </div>
            <div
                class="flex md:block min-w-[80%] md:min-w-0 bg-white backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">😊</span>
                <span class="font-bold text-lg mb-2">Empathie & Freundlichkeit</span>
                <span class="text-gray-700">Du begegnest Menschen offen, herzlich und mit Verständnis.</span>
            </div>
            <div
                class="flex md:block min-w-[80%] md:min-w-0 bg-white backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">🚗</span>
                <span class="font-bold text-lg mb-2">Führerschein & Mobilität</span>
                <span class="text-gray-700">Du bist flexibel und für unsere Einsätze mobil.</span>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto md:px-4 bg-gradient-to-bl from-white  py-8 md:rounded-lg md:mt-8">

        <h2 class="text-3xl font-bold text-brand pl-4">Deine Benefits</h2>
        <div
            class="md:grid md:grid-cols-2 lg:grid-cols-3 gap-4 flex overflow-x-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100 px-2 py-8">
            <div
                class="flex md:block min-w-[70%] md:min-w-0 bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">💶</span>
                <span class="font-bold text-lg mb-2">Attraktive Vergütung</span>
                <span class="text-gray-700">Wir zahlen deutlich über Mindestlohn – deine Arbeit ist uns viel wert.</span>
            </div>
            <div
                class="flex md:block min-w-[80%] md:min-w-0 bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">🚗</span>
                <span class="font-bold text-lg mb-2">Kilometergeld ab Zuhause</span>
                <span class="text-gray-700">Deine Fahrten werden ab deiner Haustür vergütet – fair und unkompliziert.</span>
            </div>
            <div
                class="flex md:block min-w-[80%] md:min-w-0 bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">🎉</span>
                <span class="font-bold text-lg mb-2">Freie Wochenenden & Feiertage</span>
                <span class="text-gray-700">Genieße deine Freizeit – bei uns sind Wochenenden und Feiertage frei.</span>
            </div>
            <div
                class="flex md:block min-w-[80%] md:min-w-0 bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">📄</span>
                <span class="font-bold text-lg mb-2">Flexible Arbeitsmodelle</span>
                <span class="text-gray-700">Ob auf 538€-Basis oder in Festanstellung (bis ca. 30 Std./Woche) – du
                    entscheidest.</span>
            </div>
            <div
                class="flex md:block min-w-[80%] md:min-w-0 bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">🏖️</span>
                <span class="font-bold text-lg mb-2">Lohnfortzahlung</span>
                <span class="text-gray-700">Im Urlaub und bei Krankheit erhältst du weiterhin dein Gehalt.</span>
            </div>
            <div
                class="flex md:block min-w-[80%] md:min-w-0 bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">🏡</span>
                <span class="font-bold text-lg mb-2">Familiäres Umfeld</span>
                <span class="text-gray-700">Bei uns erwartet dich ein herzliches und unterstützendes Team.</span>
            </div>
            <div
                class="flex md:block min-w-[80%] md:min-w-0 bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">🤗</span>
                <span class="font-bold text-lg mb-2">Gemeinsame Aktivitäten</span>
                <span class="text-gray-700">Wir treffen uns regelmäßig – nicht nur zur Weihnachtsfeier!</span>
            </div>
            <div
                class="flex md:block min-w-[80%] md:min-w-0 bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">🎓</span>
                <span class="font-bold text-lg mb-2">Professionelle Schulungen</span>
                <span class="text-gray-700">Du erhältst eine Schulung nach AnFöVO – für deinen optimalen Start.</span>
            </div>
            <div
                class="flex md:block min-w-[80%] md:min-w-0 bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-8 flex-col items-center text-center hover:bg-white/95 transition duration-200 mx-2">
                <span class="text-4xl mb-3">⏳</span>
                <span class="font-bold text-lg mb-2">Pünktliche Lohnzahlung</span>
                <span class="text-gray-700">Dein Gehalt kommt zuverlässig zum Monatsende – darauf kannst du dich
                    verlassen.</span>
            </div>
        </div>
    </div>

    <x-section title="Interesse geweckt?" class="py-10 space-y-6 text-gray-800">
        <p class="text-lg">Du möchtest Teil unseres Teams werden? <br />Dann freuen wir uns auf deine Kontaktaufnahme!</p>
        <div class="font-semibold mt-4">
            <b class="block">{{ config('company.name') }}</b>
            {!! nl2br(e(str_replace(',', "\n", config('company.adress')))) !!}
            <br>
            <br>
            @php
                $phone = config('company.phone');
                if (Str::startsWith($phone, '+49')) {
                    $phone_display = '0' . str_replace(' ', '', substr($phone, 3));
                    $phone_display = substr($phone_display, 0, 4) . '-' . substr($phone_display, 4);
                } else {
                    $phone_display = $phone;
                }
            @endphp



            <div class="flex flex-col md:flex-row gap-4 mt-6">
                <a href="tel:{{ config('company.phone') }}"
                    class="flex-1 px-6 py-4 ulsating-border text-lg font-semibold text-white bg-brand rounded-lg text-center hover:bg-brand-dark transition">
                    <span class="block font-thin text-sm">Einfach anrufen:</span>
                    {{ $phone_display }}
                </a>

                <a href="mailto:{{config('company.mail')}}"
                    class="flex-1 px-6 py-4 text-lg font-semibold text-brand bg-white border border-brand rounded-lg text-center hover:bg-brand hover:text-white transition">
                    <span class="block font-thin text-sm">oder E-Mail senden:</span>
                    {{config('company.mail')}}
                </a>
            </div>
        </div>
        <p class="py-4">Schreibe uns einfach eine kurze Nachricht oder rufe direkt an – wir melden uns schnellstmöglich bei
            dir zurück.</p>
    </x-section>
@endsection
