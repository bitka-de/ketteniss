@extends('layouts.app')

@section('title', 'Kontakt')

@section('content')

{{-- Hero --}}
<x-navbar />
<x-hero alt="Kontaktaufnahme mit dem Betreuungsdienst" :autoHeight="true">

    <div class="text-white p-6 md:p-10 max-w-[1200px] space-y-4">
        <x-headline type="h1" class="text-white">
            Ihre Anfrage – <span class='highlight-dark'>schnell, persönlich und unverbindlich</span>
        </x-headline>
    </div>
</x-hero>

{{-- Kontaktbereich --}}
<x-section title="Wie können wir Ihnen helfen?" class="py-20">
    <div class="grid lg:grid-cols-2 gap-12 items-start">

        {{-- Kontaktinfos --}}
        <div class="space-y-6 text-gray-700">
            <p class="text-lg leading-relaxed">
                Sie haben Fragen zu unseren Leistungen oder möchten direkt ein Beratungsgespräch vereinbaren? Wir sind für Sie da – persönlich, zuverlässig und unverbindlich.
            </p>

            <ul class="space-y-4">
                <li class="flex items-start gap-3">
                    <x-icon name="phone" class="text-brand size-6" />
                    <div>
                        <strong>Telefon:</strong><br />
                        <a href="tel:+492412345678" class="hover:underline text-blue-600">{{ config('company.phone')}}</a>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <x-icon name="mail" class="text-brand size-6" />
                    <div>
                        <strong>E-Mail:</strong><br />
                        <a href="mailto:kontakt@betreuungsdienst-ketteniss.de" class="hover:underline text-blue-600">
                            {{ config('company.mail')}}
                        </a>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <x-icon name="map" class="text-brand size-6" />
                    <div>
                        <strong>Adresse:</strong><br />
                         {{ config('company.adress')}}
                    </div>
                </li>
            </ul>

            <div class="pt-4">
                <x-button href="https://www.google.com/maps/dir//{{ config('company.adress')}}" target="_blank" variant="white">
                    Route planen
                </x-button>
            </div>
        </div>

        {{-- Kontaktformular --}}
        <div class="bg-white shadow-xl rounded-xl p-6 md:p-10 space-y-6">

            <h2 class="text-2xl font-bold text-gray-800">Jetzt unverbindlich anfragen</h2>

            {{-- ✅ Erfolgsmeldung --}}
            @if (session('success'))
                <div class="p-4 text-green-800 bg-green-100 border border-green-300 rounded-md animate-fade-in">
                    {{ session('success') }}
                </div>
            @endif

<form action="{{ route('kontakt.absenden') }}" method="POST" class="space-y-6">
    @csrf

    {{-- Name --}}
    <div class="relative">
        <label for="name" class="block text-sm font-semibold text-gray-800 mb-1">Ihr Name</label>
        <input
            type="text"
            name="name"
            id="name"
            required
            class="peer w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 shadow-sm focus:border-brand focus:ring-1 focus:ring-brand placeholder-transparent transition"
            placeholder="Ihr vollständiger Name"
        />
    </div>

    {{-- E-Mail --}}
    <div class="relative">
        <label for="email" class="block text-sm font-semibold text-gray-800 mb-1">E-Mail-Adresse</label>
        <input
            type="email"
            name="email"
            id="email"
            required
            class="peer w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 shadow-sm focus:border-brand focus:ring-1 focus:ring-brand placeholder-transparent transition"
            placeholder="beispiel@domain.de"
        />
    </div>

    {{-- Telefon --}}
    <div class="relative">
        <label for="telefon" class="block text-sm font-semibold text-gray-800 mb-1">Telefonnummer (optional)</label>
        <input
            type="tel"
            name="telefon"
            id="telefon"
            class="peer w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 shadow-sm focus:border-brand focus:ring-1 focus:ring-brand placeholder-transparent transition"
            placeholder="+49 123 456789"
        />
    </div>

    {{-- Nachricht --}}
    <div class="relative">
        <label for="nachricht" class="block text-sm font-semibold text-gray-800 mb-1">Ihre Nachricht</label>
        <textarea
            name="nachricht"
            id="nachricht"
            rows="5"
            required
            class="peer w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 shadow-sm focus:border-brand focus:ring-1 focus:ring-brand placeholder-transparent transition"
            placeholder="Was möchten Sie uns mitteilen?"
        ></textarea>
    </div>

    {{-- Submit Button --}}
    <div class="mt-4 flex justify-end">
        <x-button type="submit" variant="primary" class="w-full md:w-auto">
            Nachricht senden
        </x-button>
    </div>
</form>

        </div>
    </div>
</x-section>

@endsection
