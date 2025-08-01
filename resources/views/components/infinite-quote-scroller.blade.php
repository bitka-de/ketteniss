@props(['quotes' => []])

<div
    x-data="infiniteScroll"
    x-init="init()"
    x-ref="scroller"
    class="overflow-x-auto scrollbar-hide"
    @scroll.passive="handleScroll"
    style="scroll-behavior: smooth"
>
    <div x-ref="content" class="flex gap-8 px-4 py-6 w-max">
        {{-- Wir wiederholen die Quotes mehrfach für den Loop-Effekt --}}
        @for ($i = 0; $i < 3; $i++)
            @foreach($quotes as $quote)
                <div class="flex-shrink-0 w-72 flex justify-between flex-col bg-gradient-to-tl from-white via-transparent to-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                    <p class="text-gray-700 text-md border-b border-gray-100 italic mb-4 text-balance grow items-center justify-center flex text-center">"{{ $quote['text'] }}"</p>
                    <div class="text-sm font-semibold text-brand-light ml-auto">– {{ $quote['name'] }}</div>
                </div>
            @endforeach
        @endfor
    </div>
</div>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('infiniteScroll', () => ({
            init() {
                // Starte mittig, um nach links und rechts scrollen zu können
                this.$nextTick(() => {
                    const scroller = this.$refs.scroller;
                    scroller.scrollLeft = scroller.scrollWidth / 3;
                });
            },
            handleScroll() {
                const scroller = this.$refs.scroller;
                const third = scroller.scrollWidth / 3;

                if (scroller.scrollLeft <= 10) {
                    scroller.scrollLeft = third;
                }

                if (scroller.scrollLeft >= scroller.scrollWidth - scroller.clientWidth - 10) {
                    scroller.scrollLeft = third;
                }
            },
        }));
    });
</script>
