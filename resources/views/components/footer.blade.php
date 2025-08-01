<footer class="from-brand-dark to-brand bg-gradient-to-l text-white 3xl">
    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-8">

        {{-- Claim / Selbstbeschreibung --}}
        <div class="md:col-span-1 space-y-2">
            <h2 class="text-lg font-bold text-brand-lighter">Betreuungsdienst Ketteniß</h2>
            <p class="text-sm text-white/90 leading-relaxed">
                Häusliche Alltagsbegleitung in Aachen & Umgebung. Persönlich, zuverlässig und mit Herz – für ein Leben
                in gewohnter Umgebung.
            </p>
        </div>

        {{-- Navigation --}}
        <div>
            <h3 class="text-sm text-brand-lighter font-semibold uppercase tracking-wider mb-2">Navigation</h3>
            <ul class="space-y-1 text-sm">
                <li><a href="/" class="hover:underline hidden">Startseite</a></li>
                <li><a href="/ueber-uns" class="hover:underline">Über uns</a></li>
                <li><a href="/leistungen" class="hover:underline">Leistungen</a></li>
                <li><a href="/einsatzgebiet" class="hover:underline">Einsatzgebiet</a></li>
                <li><a href="/kosten" class="hover:underline">Pflegekasse & Kosten</a></li>

            </ul>
        </div>

        {{-- Einsatzgebiete --}}
        <div>
            <h3 class="text-sm text-brand-lighter  font-semibold uppercase tracking-wider mb-2">Einsatzgebiete</h3>
            <ul class="space-y-1 text-sm">
                <li><a href="/einsatzgebiet" class="hover:underline">Einsatzgebiet</a></li>
                <li><a href="/einsatzgebiet/herzogenrath" class="hover:underline">Herzogenrath</a></li>
                <li><a href="/einsatzgebiet/wuerselen" class="hover:underline">Würselen</a></li>
            </ul>
        </div>

        {{-- Rechtliches --}}
        <div>
            <h3 class="text-sm text-brand-lighter  font-semibold uppercase tracking-wider mb-2">Rechtliches</h3>
            <ul class="space-y-1 text-sm">
                <li><a href="/impressum" class="hover:underline">Impressum</a></li>
                <li><a href="/datenschutz" class="hover:underline">Datenschutz</a></li>
                <li><a href="/faq" class="hover:underline">FAQ</a></li>
            </ul>
        </div>
    </div>

    {{-- Copyright-Zeile --}}
    <div
        class=" bg-gradient-to-l text-brand-darker from-brand-light/60 via-brand-light/20 to-brand-light shadow text-center py-4 text-xs">
        © {{ now()->year }} Betreuungsdienst Ketteniß – Alle Rechte vorbehalten.
    </div>
</footer>
