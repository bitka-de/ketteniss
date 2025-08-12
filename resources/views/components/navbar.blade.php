<header class="w-full absolute sm:my-4 sm:top-2 top-0 left-0 z-40 flex justify-center">
    <div
        class="backdrop-blur-md bg-white/70 shadow-md sm:rounded-xl w-full max-w-7xl px-6 py-3 flex items-center justify-between">

        {{-- Logo (links) --}}
        <div class="w-48">
            <x-logo />
        </div>

        {{-- Navigation (zentriert) --}}
        <nav class="hidden md:flex gap-6 text-sm font-medium text-gray-800" aria-label="Hauptnavigation">
            <x-link route="ueber-uns" title="Zur Startseite">Über Uns</x-link>
            <x-link route="leistungen" title="Unsere Leistungen">Leistungen</x-link>
            <x-link route="einsatzgebiet" title="Unsere Einsatzgebiete">Einsatzgebiete</x-link>
            <x-link route="jobs" title="Jobs">Jobs</x-link>
            <x-link route="faq" title="Häufige Fragen">FAQ</x-link>
        </nav>

        {{-- Button (rechts) --}}


        {{-- Kontaktbutton --}}
        <div class="hidden md:flex w-48 justify-end">
            <x-button href="/kontakt" variant="primary">Kontakt</x-button>
        </div>

        {{-- Mobile Toggle Button --}}
        <button id="mobile-menu-toggle" class="md:hidden p-2 text-gray-700" aria-label="Menü öffnen">
            <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>


    </div>
</header>

{{-- Mobile Offcanvas-Menü + Overlay --}}
<div id="mobile-menu-overlay"
    class="fixed inset-0 bg-black/70 backdrop-blur-sm z-40 hidden transition-opacity duration-300 opacity-0"></div>

<aside id="mobile-menu"
    class="fixed cp-4 top-0 right-0 h-full w-80 bg-gradient-to-bl from-brand to-brand-light z-40 transform translate-x-full transition-transform duration-500 ease-in-out shadow-xl flex flex-col justify-between p-6">

    <div class="w-full h-40 bg-black/10 absolute left-0 cp-5 z-10 top-0"></div>
    {{-- Schließen-Button --}}
    <div class="flex justify-end z-20">
        <button id="mobile-menu-close" class="text-white" aria-label="Menü schließen">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Navigation --}}
    <nav class="flex-1 flex flex-col justify-center space-y-6 text-end font-bold text-white text-2xl"
        aria-label="Mobile Navigation">
        <x-link route="home" title="Zur Startseite">Home</x-link>
        <x-link route="ueber-uns" title="Zur Startseite">Über Uns</x-link>
        <x-link route="leistungen" title="Unsere Leistungen">Leistungen</x-link>
        <x-link route="einsatzgebiet" title="Unsere Einsatzgebiete">Einsatzgebiete</x-link>
        <x-link route="jobs" title="Jobs">Jobs</x-link>
        <x-link route="faq" title="Häufige Fragen">FAQ</x-link>
    </nav>

    {{-- Kontaktbutton unten --}}
    <div class="pt-6 flex gap-2 z-20">
        <x-button href="tel:{{ config('company.phone') }}" variant="ghost" class="w-auto !bg-brand-darker">
            <svg viewBox="0 0 256 256" class="h-6 *:stroke-white">
                <path fill="none" d="M0 0h256v256H0z" />
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="16"
                    d="M152 48a78.61 78.61 0 0 1 56 56m-64-24c16.52 4.42 27.58 15.48 32 32m-19.61 41.34a8 8 0 0 1 7.59-.69l47.16 21.13a8 8 0 0 1 4.8 8.3A48.33 48.33 0 0 1 168 224 136 136 0 0 1 32 88a48.33 48.33 0 0 1 41.92-47.94 8 8 0 0 1 8.3 4.8l21.13 47.2a8 8 0 0 1-.66 7.53L81.32 125a7.93 7.93 0 0 0-.54 7.81c8.27 16.93 25.77 34.22 42.75 42.41a7.92 7.92 0 0 0 7.83-.59Z" />
            </svg>
        </x-button>
        <x-button href="mailto:{{ config('company.mail') }}" variant="ghost" class="w-auto !bg-brand-darker">
            <svg viewBox="0 0 256 256" class="h-6 *:stroke-white">
                <path fill="none" d="M0 0h256v256H0z" />
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="16" d="m224 56-96 88-96-88" />
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="16"
                    d="M32 56h192v136a8 8 0 0 1-8 8H40a8 8 0 0 1-8-8V56h0Zm78.55 72-76.08 69.74m187.06 0L145.45 128" />
            </svg>
        </x-button>
                <x-button href="/kontakt" variant="white" class="w-full justify-center">Kontakt</x-button>

    </div>

    <svg class="h-auto w-80 shrink-0 text-brand-lighter opacity-10 z-10  absolute bottom-8" viewBox="0 0 593 296"
        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill="currentColor"
            d="M295.5 124.7H257v38.5h38.5zm45 0H302v38.5h38.5zM257 208h38.5v-38.5H257zm45 0h38.5v-38.6H302zm110.2-99.9c1.3-4.2 2.1-7.3 2.1-7.3l-115.5-99-113.5 99.3s1.4 3.2 2.5 7.7c1.1 4.6 2.1 11 2.1 11l108.9-95.3 111.4 94.9s.8-7 2-11.3zm146.9 173.1h1.2c-11.3-7.2-28.7-20.5-42.4-42.8-1.5-2.4-5.7-9.4-9.8-19.2-10-23.9-6.2-32.9-12.9-63.3-3.9-17.3-8.2-35.7-21.6-54.9-5.5-8-11.1-13.8-15-17.6q-40.7-38.1-81.4-76.3c-3.9-2.1-8.5-2.2-11.8-.1-6.1 4-3.3 11.5-3.2 11.9 1.2 4.6 3.3 7.2 5 10.2 23.4 33.5 36.7 52.7 44.3 61.7 6.7 7.8 5.7 3.6 10.1 2.4 17.8-4.8 24 6.4 25.7 12.2 4.7 23 9.1 42.4 10.7 56.7 1.5 13 1.7 17.8 4.3 33.3 2.1 12.2 5.2 23 5.2 23s-3.3 1.1-5.5 1.8c-2.1-7.3-4.5-15.4-6-23.4-2.4-12.6-2.8-25.6-4.8-39.1-2.4-16.1-6.1-31.8-8.9-47-.1-.6-1.1-7.5-7.2-10.5-.6-.3-9.2-3.4-13.9.5-3.1 2.7-3.2 5.7-3.6 7.6-3.4 18.6-4.9 34.3-6.1 45.5-4.1 39.7-4.1 59.6 1.6 83 0 0 .1.3 8.3 29.4-37.4-2-78.8-3.2-122.3-3.2-43.2 0-84.3 1.2-121.6 3.2 8.3-29.1 8.4-29.4 8.4-29.4 5.7-23.4 5.7-43.3 1.6-83-1.2-11.2-2.8-26.9-6.1-45.5-.4-1.9-.5-4.9-3.6-7.6-4.7-3.9-13.3-.8-13.9-.5-6.1 3-7.2 9.9-7.2 10.5-2.8 15.2-6.5 30.9-8.9 47-2 13.5-2.5 26.5-4.8 39.1-1.5 8-3.9 16.1-6 23.4-2.2-.7-5.6-1.8-5.6-1.8s3.2-10.8 5.3-23c2.6-15.5 2.8-20.3 4.3-33.3 1.6-14.3 6-33.7 10.7-56.7 1.7-5.8 7.9-17 25.7-12.2 4.3 1.2 3.4 5.4 10.1-2.4 7.6-9 20.8-28.2 44.3-61.7 1.7-3 3.8-5.6 5-10.2.1-.4 2.9-7.9-3.3-11.9-3.3-2.1-7.8-2-11.7.1q-40.7 38.2-81.4 76.3c-3.9 3.8-9.5 9.6-15 17.6-13.4 19.2-17.7 37.6-21.6 54.9-6.7 30.4-2.9 39.4-12.9 63.3-4.1 9.8-8.3 16.8-9.8 19.2C67.4 260.7 50 274 38.7 281.2c-12.2 2.5-22.2 5.2-29.8 7.9 69.6-8.4 173.8-13.7 290.2-13.7 116.5 0 220.7 5.3 290.3 13.7-7.7-2.8-17.9-5.5-30.3-7.9z" />

    </svg>
</aside>


<script>
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const closeBtn = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('mobile-menu-overlay');

    function openMenu() {
        mobileMenu.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
        setTimeout(() => overlay.classList.add('opacity-100'), 10);
    }

    function closeMenu() {
        mobileMenu.classList.add('translate-x-full');
        overlay.classList.remove('opacity-100');
        setTimeout(() => overlay.classList.add('hidden'), 300);
    }

    toggleBtn.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);
</script>
