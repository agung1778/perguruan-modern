{{-- =========================================================
    TESTIMONIAL SECTION
========================================================= --}}
<section class="relative overflow-hidden bg-white py-24 sm:py-28">

    {{-- Decorative Background --}}
    <div class="pointer-events-none absolute -left-40 top-20 h-96 w-96 rounded-full bg-emerald-100/50 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-green-100/40 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Header --}}
        <div class="mx-auto max-w-3xl text-center">

            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-2 text-sm font-semibold uppercase tracking-wider text-emerald-700">
                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                Testimoni
            </div>

            <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl md:text-5xl">
                Apa Kata Mereka?
            </h2>

            <div class="mt-6 flex items-center justify-center gap-2">
                <span class="h-1 w-14 rounded-full bg-emerald-600"></span>
                <span class="h-1 w-5 rounded-full bg-emerald-300"></span>
            </div>

            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                Cerita, pengalaman, dan kesan dari keluarga besar
                {{ $website?->school_name ?? 'Perguruan Amaliah' }}.
            </p>

        </div>

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

                        if (this.total > 1) {
                            this.interval = setInterval(() => {
                                this.next()
                            }, 6000)
                        }
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
                class="relative mx-auto mt-16 max-w-4xl"
                @mouseenter="stopAutoPlay()"
                @mouseleave="startAutoPlay()"
            >

                {{-- Card --}}
                <div class="relative">

                    @foreach($testimonials as $index => $testimonial)

                        <div
                            x-show="active === {{ $index }}"
                            x-cloak
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 translate-x-8"
                            x-transition:enter-end="opacity-100 translate-x-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0 -translate-x-8"
                        >

                            <article class="relative min-h-[390px] overflow-hidden rounded-3xl border border-slate-200 bg-white p-7 shadow-xl shadow-slate-900/5 sm:p-10 lg:p-12">

                                {{-- Accent --}}
                                <div class="absolute inset-x-0 top-0 h-1.5 bg-gradient-to-r from-emerald-600 via-emerald-400 to-emerald-600"></div>

                                {{-- Quote --}}
                                <div class="absolute right-7 top-7 flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600 sm:right-10 sm:top-10">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-7 w-7">
                                        <path d="M7.17 6A5.17 5.17 0 0 0 2 11.17V18h7v-6H6.83A2.83 2.83 0 0 1 9.66 9V6H7.17zM17.17 6A5.17 5.17 0 0 0 12 11.17V18h7v-6h-2.17A2.83 2.83 0 0 1 19.66 9V6h-2.49z"/>
                                    </svg>

                                </div>

                                {{-- Profile --}}
                                <div class="flex items-center gap-5 pr-16 sm:pr-20">

                                    @if(filled($testimonial->photo))

                                        <div class="relative shrink-0">

                                            <div class="absolute -inset-1 rounded-full bg-emerald-200/70"></div>

                                            <img
                                                src="{{ Storage::url($testimonial->photo) }}"
                                                alt="{{ $testimonial->name }}"
                                                loading="lazy"
                                                class="relative h-16 w-16 rounded-full border-4 border-white object-cover shadow-md sm:h-20 sm:w-20"
                                            >

                                        </div>

                                    @else

                                        <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-full border-4 border-white bg-gradient-to-br from-emerald-600 to-emerald-800 text-xl font-bold text-white shadow-md ring-2 ring-emerald-100 sm:h-20 sm:w-20 sm:text-2xl">
                                            {{ strtoupper(mb_substr($testimonial->name, 0, 1)) }}
                                        </div>

                                    @endif

                                    <div class="min-w-0">

                                        <h3 class="truncate text-lg font-bold text-slate-900 sm:text-xl">
                                            {{ $testimonial->name }}
                                        </h3>

                                        @if(filled($testimonial->position))

                                            <p class="mt-1 text-sm font-medium text-emerald-600">
                                                {{ $testimonial->position }}
                                            </p>

                                        @endif

                                    </div>

                                </div>

                                {{-- Divider --}}
                                <div class="my-7 h-px bg-slate-100"></div>

                                {{-- Message --}}
                                <div class="flex min-h-[150px] items-center">

                                    <p class="text-base leading-8 text-slate-600 sm:text-lg sm:leading-9">

                                        <span class="font-serif text-4xl font-bold text-emerald-500">
                                            “
                                        </span>

                                        {{ $testimonial->message }}

                                        <span class="font-serif text-4xl font-bold text-emerald-500">
                                            ”
                                        </span>

                                    </p>

                                </div>

                                {{-- Bottom --}}
                                <div class="mt-8 flex items-center justify-between">

                                    <div class="flex items-center gap-2">
                                        <span class="h-1 w-10 rounded-full bg-emerald-500"></span>
                                        <span class="h-1 w-3 rounded-full bg-emerald-200"></span>
                                    </div>

                                    @if($testimonials->count() > 1)

                                        <div class="text-sm font-medium text-slate-400">

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

                    {{-- Previous --}}
                    @if($testimonials->count() > 1)

                        <button
                            type="button"
                            @click="previous(); startAutoPlay()"
                            aria-label="Testimoni sebelumnya"
                            class="group absolute -left-4 top-1/2 z-10 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-600 shadow-lg transition-all duration-300 hover:border-emerald-500 hover:bg-emerald-600 hover:text-white hover:shadow-xl sm:-left-6"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 transition-transform group-hover:-translate-x-0.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/>
                            </svg>
                        </button>

                        {{-- Next --}}
                        <button
                            type="button"
                            @click="next(); startAutoPlay()"
                            aria-label="Testimoni berikutnya"
                            class="group absolute -right-4 top-1/2 z-10 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-600 shadow-lg transition-all duration-300 hover:border-emerald-500 hover:bg-emerald-600 hover:text-white hover:shadow-xl sm:-right-6"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 transition-transform group-hover:translate-x-0.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m13.5 4.5 7.5 7.5m0 0-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>

                    @endif

                </div>

                {{-- Dots --}}
                @if($testimonials->count() > 1)

                    <div class="mt-8 flex items-center justify-center gap-2">

                        @foreach($testimonials as $index => $testimonial)

                            <button
                                type="button"
                                @click="goTo({{ $index }})"
                                aria-label="Buka testimoni {{ $index + 1 }}"
                                :class="active === {{ $index }}
                                    ? 'w-10 bg-emerald-600'
                                    : 'w-2.5 bg-slate-300 hover:bg-emerald-300'"
                                class="h-2.5 rounded-full transition-all duration-300"
                            ></button>

                        @endforeach

                    </div>

                @endif

            </div>

        @else

            {{-- Empty State --}}
            <div class="mx-auto mt-16 max-w-3xl rounded-3xl border border-slate-200 bg-slate-50 px-6 py-16 text-center">

                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-8 w-8">
                        <path d="M7.17 6A5.17 5.17 0 0 0 2 11.17V18h7v-6H6.83A2.83 2.83 0 0 1 9.66 9V6H7.17zM17.17 6A5.17 5.17 0 0 0 12 11.17V18h7v-6h-2.17A2.83 2.83 0 0 1 19.66 9V6h-2.49z"/>
                    </svg>

                </div>

                <h3 class="mt-5 text-xl font-bold text-slate-900">
                    Belum Ada Testimoni
                </h3>

                <p class="mx-auto mt-2 max-w-lg text-sm leading-7 text-slate-500">
                    Testimoni dari siswa, orang tua, alumni, dan masyarakat
                    akan ditampilkan setelah ditambahkan melalui dashboard admin.
                </p>

            </div>

        @endif

    </div>

</section>