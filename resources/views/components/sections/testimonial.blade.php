{{-- =========================================================
TESTIMONIAL SECTION
========================================================= --}}

<section class="relative overflow-hidden bg-white py-16 sm:py-20 lg:py-24">

{{-- =====================================================
    DECORATIVE BACKGROUND
====================================================== --}}
<div class="pointer-events-none absolute -left-40 top-20 h-80 w-80 rounded-full bg-emerald-100/50 blur-3xl"></div>
<div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-100/40 blur-3xl"></div>

<div class="relative mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

    {{-- =====================================================
        HEADER
    ====================================================== --}}
    <div class="mx-auto max-w-3xl text-center">

        {{-- Label --}}
        <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-3.5 py-2 text-xs font-bold uppercase tracking-wider text-emerald-700 sm:px-4 sm:text-sm">
            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
            Testimoni
        </div>

        {{-- Title --}}
        <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
            Apa Kata Mereka?
        </h2>

        {{-- Accent --}}
        <div class="mt-5 flex items-center justify-center gap-2">
            <span class="h-1 w-12 rounded-full bg-emerald-600 sm:w-14"></span>
            <span class="h-1 w-4 rounded-full bg-emerald-300 sm:w-5"></span>
        </div>

        {{-- Description --}}
        <p class="mx-auto mt-5 max-w-2xl text-sm leading-7 text-slate-600 sm:mt-6 sm:text-base sm:leading-8 lg:text-lg">
            Pengalaman dan kesan dari siswa, orang tua, dan masyarakat
            terhadap {{ $website?->school_name ?? 'Perguruan Amaliah' }}.
        </p>

    </div>


    {{-- =====================================================
        TESTIMONIAL
    ====================================================== --}}
    @if(isset($testimonials) && $testimonials->count())

        <div
            x-data="{
                active: 0,
                total: {{ $testimonials->count() }},
                interval: null,

                init() {
                    if (this.total > 1) {
                        this.startAutoPlay()
                    }
                },

                destroy() {
                    this.stopAutoPlay()
                },

                startAutoPlay() {
                    this.stopAutoPlay()

                    this.interval = setInterval(() => {
                        this.next()
                    }, 5000)
                },

                stopAutoPlay() {
                    if (this.interval) {
                        clearInterval(this.interval)
                        this.interval = null
                    }
                },

                next() {
                    this.active = (this.active + 1) % this.total
                },

                previous() {
                    this.active = (this.active - 1 + this.total) % this.total
                },

                goTo(index) {
                    this.active = index
                    this.startAutoPlay()
                }
            }"
            class="relative mx-auto mt-12 max-w-4xl sm:mt-14 lg:mt-16"
            @mouseenter="stopAutoPlay()"
            @mouseleave="startAutoPlay()"
        >

            {{-- =================================================
                CAROUSEL
            ================================================== --}}
            <div class="relative">

                {{-- =================================================
                    CARDS
                ================================================== --}}
                @foreach($testimonials as $index => $testimonial)

                    <div
                        x-show="active === {{ $index }}"
                        x-cloak
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-x-6"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0 -translate-x-6"
                        class="w-full"
                    >

                        <article class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-6 shadow-lg shadow-slate-900/5 sm:rounded-3xl sm:p-8 md:p-10 lg:p-12">

                            {{-- Top Accent --}}
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-emerald-600 via-emerald-400 to-emerald-600 sm:h-1.5"></div>


                            {{-- =================================================
                                QUOTE ICON
                            ================================================== --}}
                            <div class="absolute right-5 top-5 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 sm:right-8 sm:top-8 sm:h-14 sm:w-14 sm:rounded-2xl">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                    class="h-5 w-5 sm:h-7 sm:w-7"
                                >
                                    <path d="M7.17 6A5.17 5.17 0 0 0 2 11.17V18h7v-6H6.83A2.83 2.83 0 0 1 9.66 9V6H7.17zM17.17 6A5.17 5.17 0 0 0 12 11.17V18h7v-6h-2.17A2.83 2.83 0 0 1 19.66 9V6h-2.49z"/>
                                </svg>
                            </div>


                            {{-- =================================================
                                PROFILE
                            ================================================== --}}
                            <div class="flex items-center gap-4 pr-12 sm:gap-5 sm:pr-16">

                                {{-- Photo --}}
                                @if(filled($testimonial->photo))

                                    <div class="relative shrink-0">
                                        <div class="absolute -inset-1 rounded-full bg-emerald-200/70"></div>

                                        <img
                                            src="{{ Storage::url($testimonial->photo) }}"
                                            alt="{{ $testimonial->name }}"
                                            loading="lazy"
                                            class="relative h-14 w-14 rounded-full border-4 border-white object-cover shadow-md sm:h-20 sm:w-20"
                                        >
                                    </div>

                                @else

                                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full border-4 border-white bg-gradient-to-br from-emerald-600 to-emerald-800 text-lg font-bold text-white shadow-md ring-2 ring-emerald-100 sm:h-20 sm:w-20 sm:text-2xl">
                                        {{ strtoupper(mb_substr($testimonial->name, 0, 1)) }}
                                    </div>

                                @endif


                                {{-- Profile Info --}}
                                <div class="min-w-0">

                                    <h3 class="truncate text-base font-bold text-slate-900 sm:text-xl">
                                        {{ $testimonial->name }}
                                    </h3>

                                    @if(filled($testimonial->position))

                                        <p class="mt-1 truncate text-xs font-medium text-emerald-600 sm:text-sm">
                                            {{ $testimonial->position }}
                                        </p>

                                    @endif

                                </div>

                            </div>


                            {{-- Divider --}}
                            <div class="my-6 h-px bg-slate-100 sm:my-7"></div>


                            {{-- =================================================
                                MESSAGE
                            ================================================== --}}
                            <div class="min-h-0 sm:min-h-[150px]">

                                <p class="text-sm leading-7 text-slate-600 sm:text-base sm:leading-8 lg:text-lg lg:leading-9">

                                    <span class="mr-1 font-serif text-3xl font-bold leading-none text-emerald-500 sm:text-4xl">
                                        “
                                    </span>

                                    {{ $testimonial->message }}

                                    <span class="ml-1 font-serif text-3xl font-bold leading-none text-emerald-500 sm:text-4xl">
                                        ”
                                    </span>

                                </p>

                            </div>


                            {{-- =================================================
                                BOTTOM
                            ================================================== --}}
                            <div class="mt-7 flex items-center justify-between sm:mt-8">

                                {{-- Decorative Line --}}
                                <div class="flex items-center gap-2">
                                    <span class="h-1 w-8 rounded-full bg-emerald-500 sm:w-10"></span>
                                    <span class="h-1 w-3 rounded-full bg-emerald-200"></span>
                                </div>


                                {{-- Counter --}}
                                @if($testimonials->count() > 1)

                                    <div class="text-xs font-medium text-slate-400 sm:text-sm">

                                        <span
                                            x-text="String(active + 1).padStart(2, '0')"
                                            class="font-bold text-emerald-600"
                                        ></span>

                                        <span class="mx-1">/</span>

                                        <span>
                                            {{ str_pad($testimonials->count(), 2, '0', STR_PAD_LEFT) }}
                                        </span>

                                    </div>

                                @endif

                            </div>

                        </article>

                    </div>

                @endforeach


                {{-- =================================================
                    PREVIOUS BUTTON
                ================================================== --}}
                @if($testimonials->count() > 1)

                    <button
                        type="button"
                        @click="previous(); startAutoPlay()"
                        aria-label="Testimoni sebelumnya"
                        class="group absolute left-2 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-600 shadow-lg transition-all duration-300 hover:border-emerald-500 hover:bg-emerald-600 hover:text-white hover:shadow-xl sm:-left-5 sm:h-12 sm:w-12 lg:-left-6"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            class="h-4 w-4 transition-transform duration-300 group-hover:-translate-x-0.5 sm:h-5 sm:w-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"
                            />
                        </svg>
                    </button>


                    {{-- =================================================
                        NEXT BUTTON
                    ================================================== --}}
                    <button
                        type="button"
                        @click="next(); startAutoPlay()"
                        aria-label="Testimoni berikutnya"
                        class="group absolute right-2 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-600 shadow-lg transition-all duration-300 hover:border-emerald-500 hover:bg-emerald-600 hover:text-white hover:shadow-xl sm:-right-5 sm:h-12 sm:w-12 lg:-right-6"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5 sm:h-5 sm:w-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m13.5 4.5 7.5 7.5m0 0-7.5 7.5M21 12H3"
                            />
                        </svg>
                    </button>

                @endif

            </div>


            {{-- =================================================
                INDICATOR DOTS
            ================================================== --}}
            @if($testimonials->count() > 1)

                <div class="mt-6 flex items-center justify-center gap-2 sm:mt-8">

                    @foreach($testimonials as $index => $testimonial)

                        <button
                            type="button"
                            @click="goTo({{ $index }})"
                            aria-label="Buka testimoni {{ $index + 1 }}"
                            :class="active === {{ $index }}
                                ? 'w-8 bg-emerald-600 sm:w-10'
                                : 'w-2.5 bg-slate-300 hover:bg-emerald-300'"
                            class="h-2.5 rounded-full transition-all duration-300"
                        ></button>

                    @endforeach

                </div>

            @endif

        </div>

    @else

        {{-- =====================================================
            EMPTY STATE
        ====================================================== --}}
        <div class="mt-12 rounded-2xl border border-slate-200 bg-slate-50 px-5 py-12 text-center sm:mt-16 sm:rounded-3xl sm:px-6 sm:py-16">

            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    class="h-8 w-8"
                >
                    <path d="M7.17 6A5.17 5.17 0 0 0 2 11.17V18h7v-6H6.83A2.83 2.83 0 0 1 9.66 9V6H7.17zM17.17 6A5.17 5.17 0 0 0 12 11.17V18h7v-6h-2.17A2.83 2.83 0 0 1 19.66 9V6h-2.49z"/>
                </svg>
            </div>

            <h3 class="mt-5 text-xl font-bold text-slate-900">
                Belum Ada Testimoni
            </h3>

            <p class="mx-auto mt-2 max-w-lg text-sm leading-7 text-slate-500">
                Testimoni dari siswa, orang tua, dan masyarakat
                akan ditampilkan setelah ditambahkan melalui dashboard admin.
            </p>

        </div>

    @endif

</div>

</section>
